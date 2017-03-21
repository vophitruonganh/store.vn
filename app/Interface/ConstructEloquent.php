<?php
namespace Xstore\Interface\Model\Eloquent;

interface ConstructEloquent{
	protected function create(Request $request);
	protected function update($key,Request $request);
	protected function destroy($key);
}