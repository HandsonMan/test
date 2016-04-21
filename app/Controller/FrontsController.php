<?php
App::uses('AppController', 'Controller');

class FrontsController extends AppController {

	public $layout = 'fronts';
	public $components = array('Paginator');
	/**
	 * @name 首页
	 */
	public function index() {
		$this -> loadModel('User');
		$users = $this -> User -> find('all');
		$this -> set(compact('users'));
		
		// $this->User->recursive = 0;
		// $this->set('users', $this->Paginator->paginate());
	}

	public function recovery() {
		$this -> loadModel('Category');
		$categories = $this -> Category -> find('all');
		
		$this -> set(compact('categories'));
		
	}
	public function products($category_id = null) {
		if(!empty($category_id) && is_numeric($category_id)){
			$this -> loadModel('Product');
			
			$this -> paginate =array(
				'conditions' => array(
					'Product.category_id' => $category_id
				),
				'limit' => 8
			);
			$products = $this->Paginator->paginate('Product');
			
			
			// $products = $this -> Product -> find(
				// 'all',array(
						// //条件
						// 'conditions' => array(
							// 'Product.category_id' => $category_id
						// )
					// )
				// );
			$this -> set(compact('products'));
		}else{
			$this->Session->setFlash(__('分类id不能为空'));
			$this -> redirect(array('controller' => 'fronts','action' => 'recovery'));
		}
		
		
	}

	public function beforeFilter() {
		$this -> Auth -> allow();
	}

}
