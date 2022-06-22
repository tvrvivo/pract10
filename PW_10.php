<!-- Завдання 1 -->

<?php 

	class Worker {
		/*function __construct($name, $age, $salary) {
			$this->name = $name;
			$this->age = $age;
			$this->salary = $salary;
		}*/

		public $name = '';
		public $age = 0;
		public $salary = 0;
	}

	$worker = new Worker();

	$worker->name = 'Ivan';
	$worker->age = 25;
	$worker->salary = 1000;

	$worker2 = new Worker();

	$worker2->name = 'Vasia';
	$worker2->age = 26
	$worker2->salary = 2000;

	echo $worker1->salary + $worker2->salary;
?>

<!-- Завдання 2 -->

<?php 

	class Worker {

		private $name = '';
		private $age = 0;
		private $salary = 0;

		public function setName($name = '') {
			$this->name = $name;
		}
		public function getName() {
			return $this->name;
		}

		public function setAge($age = '') {
			$this->age = $age;
		}
		public function getAge() {
			return $this->age;
		}

		public function setSalary($salary = '') {
			$this->salary = $salary;
		}
		public function getSalary() {
			return $this->salary;
		}
	}

	$worker = new Worker();

	$worker->setName('Ivan');
	$worker->setAge(25);
	$worker->setSalary(1000);

	$worker2 = new Worker();

	$worker2->setName('Vasia');
	$worker2->setAge(26);
	$worker2->setSalary(2000);

	echo $worker1->getSalary() + $worker2->getSalary();
	echo $worker1->getAge() + $worker2->getAge();
?>

<!-- Завдання 3 -->

<?php 

	class Worker {

		private $name = '';
		private $age = 0;
		private $salary = 0;

		public function checkAge($age = 1) {
			if(0 < $age <= 100) return true;
			return false;
		}

		public function setName($name = '') {
			$this->name = $name;
		}
		public function getName() {
			return $this->name;
		}

		public function setAge($age = '') {
			if(checkAge($age)) $this->age = $age;
		}
		public function getAge() {
			return $this->age;
		}

		public function setSalary($salary = '') {
			$this->salary = $salary
		}
		public function getSalary() {
			return $this->salary;
		}
	}
?>

<!-- Завдання 4 -->

<?php 

	class Worker {

		function __construct($name, $salary) {
			$this->name = $name;
			$this->salary = $salary;
		}

		private $name = '';
		private $salary = 0;

		public function getName() {
			return $this->name;
		}

		public function getSalary() {
			return $this->salary;
		}
	}

	$worker = new Worker('Dima', 1000);

	echo $worker->name . ' ' . $worker->1000;
?>

<!-- Завдання 5 -->

<?php 

	class User {

		function __construct($name, $age) {
			$this->name = $name;
			$this->age = $age;
		}

		protected $name = '';
		protected $age = 0;

		public function setName($name = '') {
			$this->name = $name;
		}
		public function getName() {
			return $this->name;
		}

		public function setAge($age = '') {
			$this->age = $age;
		}
		public function getAge() {
			return $this->age;
		}
	}
?>

<!-- Завдання 6 -->

<?php 

	class Worker extends User {

		private $salary = 0;

		public function setSalary($salary = '') {
			$this->salary = $salary;
		}
		public function getSalary() {
			return $this->salary;
		}
	}

	$worker = new Worker('Ivan', 25);
	$worker->setSalary(1000);

	$worker2 = new Worker('Vasia', 26);
	$worker2->setSalary(2000);

	echo $worker1->getSalary() + $worker2->getSalary();

	class Student extends User {
		private $scholarship = 0;
		private $year = 0;

		public function setScholarship($scholarship = '') {
			$this->scholarship = $scholarship;
		}
		public function getScholarship() {
			return $this->scholarship;
		}

		public function setYear($year = '') {
			$this->year = $year;
		}
		public function getYear() {
			return $this->year;
		}
	}
?>

<!-- Завдання 7 -->

<?php 

	class Driver extends Worker {

		private $exp = 0;
		private $category = '';

		public function setExp($exp = '') {
			$this->exp = $exp;
		}
		public function getExp() {
			return $this->exp;
		}

		public function setCategory($category = '') {
			$this->category = $category;
		}
		public function getCategory() {
			return $this->category;
		}
	}
?>