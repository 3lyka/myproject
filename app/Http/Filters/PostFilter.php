<?php

namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
	public const ID = 'ID';
	public const TITLE = 'title';
	public const CONTENT = 'content';
	public const CATEGORY_ID = 'category_id';


	protected function getCallbacks(): array
	{
		return [
			self::ID => [$this, 'id'],
			self::TITLE => [$this, 'title'],
			self::CONTENT => [$this, 'content'],
			self::CATEGORY_ID => [$this, 'categoryId'],
		];
	}

	public function id(Builder $builder, $value)
	{
		$builder->where('id', 'is_published', $value);
	}

	public function title(Builder $builder, $value)
	{
		$builder->where('title', 'is_published', $value);
	}


	public function content(Builder $builder, $value)
	{
		$builder->where('content', 'is_published', $value);
	}
	public function categiryId(Builder $builder, $value)
	{
		$builder->where('category_id',  $value);
	}
}
