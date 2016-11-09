<?php

namespace common\models\queries;

/**
 * This is the ActiveQuery class for [[\common\models\Project]].
 *
 * @see \common\models\Project
 */
class ProjectQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Project[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Project|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     * @param null $db
     * @return $this
     */
    public function active($db = null)
    {
        return static::where(['is_active' => 1]);
    }
}
