<?php

namespace app\widgets;

use Yii;

class App
{
    static function isSekretaris()
    {
        if (!Yii::$app->user->isGuest) {
            if (Yii::$app->user->identity->roles === 'sekretaris') {
                return true;
            }
        }
        return false;
    }

    static function isSeksiPdms()
    {
        if (!Yii::$app->user->isGuest) {
            if (Yii::$app->user->identity->roles === 'seksi_pdms') {
                return true;
            }
        }
        return false;
    }

    static function isKepalaKppn()
    {
        if (!Yii::$app->user->isGuest) {
            if (Yii::$app->user->identity->roles === 'kepala_kppn') {
                return true;
            }
        }
        return false;
    }

    static function isSeksiVera()
    {
        if (!Yii::$app->user->isGuest) {
            if (Yii::$app->user->identity->roles === 'seksi_vera') {
                return true;
            }
        }
        return false;
    }

    static function isFoBank()
    {
        if (!Yii::$app->user->isGuest) {
            if (Yii::$app->user->identity->roles === 'fo_bank') {
                return true;
            }
        }
        return false;
    }
    static function isStakeholder()
    {
        if (!Yii::$app->user->isGuest) {
            if (Yii::$app->user->identity->roles === 'stakeholder') {
                return true;
            }
        }
        return false;
    }
}
