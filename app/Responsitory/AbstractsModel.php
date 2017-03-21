<?php

use Xstore\Interface\Model\Eloquent\ConstructEloquent;

abstract class  AbstractEloquent implements ConstructEloquent
{
	public function create(array $request)
	{

		$this->create()
	}
	public function update($key,Request $request)
	{

	}
	public function destroy($key)
	{

	}

}