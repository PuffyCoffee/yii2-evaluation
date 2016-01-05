<?php

namespace peng\evaluation;

use yii;
use yii\base\Widget;
use yii\helpers\Html;

class RadioButtonMatrix extends Widget {

	public $id;
	public $scale;
	public $questions;
	public $sections = ["Evaluation"];
	public $enableComment = false;

	public function init() {
		parent::init();
		$this->id = ($this->id) ? $this->id : 'radio-button-matrix-group';
	}

	public function run() {
		$this->validate();
		return $this->render('renderer', array(
			'questions' => $this->questions,
			'scale' => $this->scale,
			'sections' => $this->sections,
			'enableComment' => $this->enableComment,
			'id' => $this->id,
		));
	}

	private function validate() {
		if (!is_array($this->scale) || !is_array($this->questions)) {
			echo "Questions must be an array";
			Yii::$app->end();
		}
		if (!isset($this->scale['min'])) {
			$this->scale['min'] = 0;
		}
		if (!isset($this->scale['max'])) {
			$this->scale['max'] = 5;
		}
		if (!(is_int($this->scale['min']) && is_int($this->scale['max']))) {
			echo "Scale min or max must be integer";
			Yii::$app->end();
		}
		if (is_string($this->sections) || is_array($this->sections)) {	
			if (is_string(($this->sections))) {
				$this->sections = [$this->sections];
			}
		} else {
			echo "Sections must be either string or array";
			Yii::$app->end();
		}
		
	}
}
