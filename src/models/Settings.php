<?php
/**
 * pedigree plugin for Craft CMS 3.x
 *
 * Creating pedigree structure
 *
 * @link      https://snayvik.com
 * @copyright Copyright (c) 2022 Vinod Patidar
 */

namespace snvk\pedigree\models;

use snvk\pedigree\Pedigree;

use Craft;
use craft\base\Model;

/**
 * Pedigree Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Vinod Patidar
 * @package   Pedigree
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $level0;
    public $level01;
    public $level011;
    public $level0111;
    public $level0112;
    public $level012;
    public $level0121;
    public $level0122;

    public $level02;
    public $level021;
    public $level0211;
    public $level0212;
    public $level022;
    public $level0221;
    public $level0222;

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            
        ];
    }
}
