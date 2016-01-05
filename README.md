Yii2 evaluation widget
======================
An Yii2 extension, a widget which helps creating online survey, evaluation, etc

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist peng/yii2-evaluation "0.1.0"
```

or add

```
"peng/yii2-evaluation": "0.1.0"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \peng\evaluation\RadioButtonMatrix::widget([
	'id' => 'self-evalution',
	'questions' => ['Strength of Mind', 'Open Communication', 'Leadership',
		'Understanding', 'Teamwork', 'Integrity', 'Originality', 'Notification',
	],
	'scale' => ['min' => 0, 'max' => 5],
	'sections' => ['2015 Scores', '2016 Scores'],
	'enableComment' => true,
]); ?>
```

Screenshot
----

![](/screenshot/survey.png)
