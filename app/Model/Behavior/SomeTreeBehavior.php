<?php

/**
 * SomeTree Behavior
 *
 * A Tree behavior that doesn't require massive record re-writing for every insertion
 * 
 * Data base requires
 * 	id
 * 	parent_id
 * 	ancestor_list
 * 	sequence
 * You must seed the table with one root record.
 * The root record can have a non-existant parent.
 * The root records ancestor_list must be a single comma (,).
 *
 * @copyright     Copyright (c) Dreaming Mind (http://dreamingmind.com)
 * @package       app.Model.Behavior
 */

/**
 * ThinTree Behavior
 *
 * A Tree behavior that doesn't require massive record re-writing for every insertion
 *
 * @copyright     Copyright (c) Dreaming Mind (http://dreamingmind.com)
 * @package       app.Model.Behavior
 */
class SomeTreeBehavior extends ModelBehavior {

    /**
     * Default configuration values
     *
     * @var array
     */
    protected $_defaults = array(
        'parent' => 'parent_id',
        'ancestors' => 'ancestor_list',
        'sequence' => 'sequence',
        'scope' => '1 = 1',
        'recursive' => -1
    );
	
    public function setup(Model $Model, $config = array()) {
		parent::setup($Model, $config);
    }

/**
 * Clean up any initialization this behavior has done on a model. Called when a behavior is dynamically
 * detached from a model using Model::detach().
 *
 * @param Model $model Model using this behavior
 * @return void
 * @see BehaviorCollection::detach()
 */
    public function cleanup(Model $model) {
        parent::cleanup($model);
    }

/**
 * beforeFind can be used to cancel find operations, or modify the query that will be executed.
 * By returning null/false you can abort a find. By returning an array you can modify/replace the query
 * that is going to be run.
 *
 * @param Model $model Model using this behavior
 * @param array $query Data used to execute this query, i.e. conditions, order, etc.
 * @return boolean|array False or null will abort the operation. You can return an array to replace the
 *   $query that will be eventually run.
 */
    public function beforeFind(Model $model, $query) {
        parent::beforeFind($model, $query);
    }

/**
 * After find callback. Can be used to modify any results returned by find.
 *
 * @param Model $model Model using this behavior
 * @param mixed $results The results of the find operation
 * @param boolean $primary Whether this model is being queried directly (vs. being queried as an association)
 * @return mixed An array value will replace the value of $results - any other value will be ignored.
 */
    public function afterFind(Model $model, $results, $primary) {
        parent::afterFind($model, $results, $primary);
    }

/**
 * beforeValidate is called before a model is validated, you can use this callback to
 * add behavior validation rules into a models validate array. Returning false
 * will allow you to make the validation fail.
 *
 * @param Model $model Model using this behavior
 * @return mixed False or null will abort the operation. Any other result will continue.
 */
	public function beforeValidate(Model $model) {
	    parent::beforeValidate($model);
	}

/**
 * beforeSave is called before a model is saved. Returning false from a beforeSave callback
 * will abort the save operation.
 *
 * @param Model $model Model using this behavior
 * @return mixed False if the operation should abort. Any other result will continue.
 */
    public function beforeSave(Model $model) {
		parent::beforeSave($model);
    }

/**
 * afterSave is called after a model is saved.
 *
 * @param Model $model Model using this behavior
 * @param boolean $created True if this save created a new record
 * @return boolean
 */
    public function afterSave(Model $model, $created) {
		parent::afterSave($model, $created);
	}

/**
 * Before delete is called before any delete occurs on the attached model, but after the model's
 * beforeDelete is called. Returning false from a beforeDelete will abort the delete.
 *
 * @param Model $model Model using this behavior
 * @param boolean $cascade If true records that depend on this record will also be deleted
 * @return mixed False if the operation should abort. Any other result will continue.
 */
    public function beforeDelete(Model $model, $cascade = true) {
	parent::beforeDelete($model, $cascade);
    }

/**
 * DataSource error callback
 *
 * @param Model $model Model using this behavior
 * @param string $error Error generated in DataSource
 * @return void
 */
    public function onError(Model $model, $error) {
	parent::onError($model, $error);
    }

}