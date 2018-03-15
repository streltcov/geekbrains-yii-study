<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Note]].
 *
 * @see Note
 */
class NoteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Note[]|array
     */
    public function all($db = null)
    {

        return parent::all($db);

    } // end function



    /**
     * @inheritdoc
     * @return Note|array|null
     */
    public function one($db = null)
    {

        return parent::one($db);

    } // end function



    public function byCreator($userid)
    {

        return $this->andWhere(['creator_id' => $userid]);

    } // end function

} // end class
