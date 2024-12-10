<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Explorer;

class ExplorerController extends Controller
{
  // main page
  public function index()
  {
  	$data['main_folder'] = Explorer::f01_get_main_folder()->get();
  	return view('home', $data);
  }



  // enter to a folder
  public function enter_folder()
  {
  	$content = Explorer::f02_get_content_folder(request('folder'))->get();
  	$view_content = '<ul style="list-style: none; font-size: 14px; padding-left: 0;">';

  	foreach ($content as $ct)
  	{
  		if ($ct->type == 'file')
  		{
	  		$view_content .= '
	        <li class="mb-3">
	          <a href="javascript:void(0);" class="text-dark-emphasis text-decoration-none p-1 rounded action-hover position-relative">
	            <i class="bi bi-file-earmark-text position-relative" style="bottom: 2px;"></i> '.$ct->name.'
	          </a>
	        </li>
	  		';
  		}
  		else
  		{
	  		$view_content .= '
	        <li class="mb-3">
	          <a href="javascript:void(0);" class="text-decoration-none p-1 rounded action-hover position-relative child-folder" data-id="'.$ct->id.'">
	            <i class="bi bi-folder position-relative" style="bottom: 2px;"></i> '.$ct->name.'
	          </a>
	        </li>
	  		';
  		}
  	}

  	$view_content .= '</ul>';
  	echo json_encode($view_content);
  }



  // enter to a child folder
  public function enter_child()
  {
  	$folder = Explorer::find(request('folder'));

  	if ($folder->level == 1) $data['nav'] = '<h5>'.$folder->name.'</h5>';
  	else
  	{
	  	$list_parent = [];
	  	$data['nav'] = '<nav aria-label="breadcrumb" style="font-size: 14px;"><ol class="breadcrumb mb-0 pt-2 pb-1">';

	  	for ($i = $folder->level; $i > 0; $i--)
	  	{
	  		if ($i == $folder->level) $parent = $folder;
	  		else $parent = Explorer::find($parent->parent);
	  		$list_parent[] = $parent;
	  	}

	  	$sort_parent = array_reverse($list_parent);

	  	foreach ($sort_parent as $index => $sp)
	  	{
	  		if (($index+1) != count($sort_parent))
	  		{
	  			$data['nav'] .= '
		  			<li class="breadcrumb-item">
		  				<a href="javascript:void(0);" class="text-decoration-none child-folder" data-id="'.$sp->id.'">'.$sp->name.'</a>
		  			</li>
	  			';
	  		}
	  		else $data['nav'] .= '<li class="breadcrumb-item active">'.$sp->name.'</li>';
	  	}

	  	$data['nav'] .= '</ol></nav>';
  	}
  		




  	$content = Explorer::f02_get_content_folder(request('folder'))->get();
  	$data['content'] = '<ul style="list-style: none; font-size: 14px; padding-left: 0;">';

  	foreach ($content as $ct)
  	{
  		if ($ct->type == 'file')
  		{
	  		$data['content'] .= '
	        <li class="mb-3">
	          <a href="javascript:void(0);" class="text-dark-emphasis text-decoration-none p-1 rounded action-hover position-relative">
	            <i class="bi bi-file-earmark-text position-relative" style="bottom: 2px;"></i> '.$ct->name.'
	          </a>
	        </li>
	  		';
  		}
  		else
  		{
	  		$data['content'] .= '
	        <li class="mb-3">
	          <a href="javascript:void(0);" class="text-decoration-none p-1 rounded action-hover position-relative child-folder" data-id="'.$ct->id.'">
	            <i class="bi bi-folder position-relative" style="bottom: 2px;"></i> '.$ct->name.'
	          </a>
	        </li>
	  		';
  		}
  	}

  	$data['content'] .= '</ul>';
  	echo json_encode($data);
  }
}
