<?php

/**
* 
*/
class page1controller extends BaseController
{
	public function get_index()
	{
		try 
		 {
		 	$table=task::all();
			return View::make('page1',array('table'=>$table));	
		 } catch (Exception $e) {
		 	return $e;
		 } 
	}

	public function get_new()
	{
		return View::make('new');
	}

	public function get_done()
	{
		try 
		{
			$table=DB::select('select * from tasks where tasks.check = ?', array(1));
			return View::make('done',array('table'=>$table));
		} catch (Exception $e) {
			return $e;
		}
	}

	public function get_undone()
	{
		try 
		{
			$table=DB::select('select * from tasks where tasks.check = ?',array(0));
			return View::make('undone',array('table'=>$table));	
		} catch (Exception $e) {
			return $e;
		}
	}

	public function post_new()
	{
		try 
		{
			$name_of_task = Input::get('name_of_task');
			DB::table('tasks')->insert(array('task' => $name_of_task));
			return View::make('new');	
		} catch (Exception $e) {
			return $e;
		}
	}

	public function post_update($id)
	{
		try 
		{
			$curent = task::find($id);
			$curent->check=1;
			$curent->save();
			return Redirect::action('page1controller@get_index');
		} catch (Exception $e) {
			return $e;
		}
	} 

	public function get_deleteform($id)
	{
		try 
		{
			$curent= task::find($id);
			return View::make('delete',array('task'=>$curent));
		} catch (Exception $e) {
			return $e;
		}
	}

	public function post_delete($id)
	{
		try 
		{
			$delete=task::find($id);
			$delete->delete();
			return Redirect::action('page1controller@get_index');
		} catch (Exception $e) {
			return $e;
		}
	}
}

?>