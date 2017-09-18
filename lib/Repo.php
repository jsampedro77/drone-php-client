<?php
/**
 * Repo
 *
 * PHP version 5
 *
 * @category Class
 * @package  DroneClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Drone API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DroneClient\DroneClient;

use \ArrayAccess;

/**
 * Repo Class Doc Comment
 *
 * @category    Class
 * @description A version control repository.
 * @package     DroneClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Repo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Repo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'scm' => 'string',
        'owner' => 'string',
        'name' => 'string',
        'full_name' => 'string',
        'avatar_url' => 'string',
        'link_url' => 'string',
        'clone_url' => 'string',
        'default_branch' => 'string',
        'private' => 'bool',
        'trusted' => 'bool',
        'timeout' => 'int',
        'allow_pr' => 'bool',
        'allow_push' => 'bool',
        'allow_deploys' => 'bool',
        'allow_tags' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'scm' => null,
        'owner' => null,
        'name' => null,
        'full_name' => null,
        'avatar_url' => null,
        'link_url' => null,
        'clone_url' => null,
        'default_branch' => null,
        'private' => null,
        'trusted' => null,
        'timeout' => null,
        'allow_pr' => null,
        'allow_push' => null,
        'allow_deploys' => null,
        'allow_tags' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'scm' => 'scm',
        'owner' => 'owner',
        'name' => 'name',
        'full_name' => 'full_name',
        'avatar_url' => 'avatar_url',
        'link_url' => 'link_url',
        'clone_url' => 'clone_url',
        'default_branch' => 'default_branch',
        'private' => 'private',
        'trusted' => 'trusted',
        'timeout' => 'timeout',
        'allow_pr' => 'allow_pr',
        'allow_push' => 'allow_push',
        'allow_deploys' => 'allow_deploys',
        'allow_tags' => 'allow_tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'scm' => 'setScm',
        'owner' => 'setOwner',
        'name' => 'setName',
        'full_name' => 'setFullName',
        'avatar_url' => 'setAvatarUrl',
        'link_url' => 'setLinkUrl',
        'clone_url' => 'setCloneUrl',
        'default_branch' => 'setDefaultBranch',
        'private' => 'setPrivate',
        'trusted' => 'setTrusted',
        'timeout' => 'setTimeout',
        'allow_pr' => 'setAllowPr',
        'allow_push' => 'setAllowPush',
        'allow_deploys' => 'setAllowDeploys',
        'allow_tags' => 'setAllowTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'scm' => 'getScm',
        'owner' => 'getOwner',
        'name' => 'getName',
        'full_name' => 'getFullName',
        'avatar_url' => 'getAvatarUrl',
        'link_url' => 'getLinkUrl',
        'clone_url' => 'getCloneUrl',
        'default_branch' => 'getDefaultBranch',
        'private' => 'getPrivate',
        'trusted' => 'getTrusted',
        'timeout' => 'getTimeout',
        'allow_pr' => 'getAllowPr',
        'allow_push' => 'getAllowPush',
        'allow_deploys' => 'getAllowDeploys',
        'allow_tags' => 'getAllowTags'
    ];

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['scm'] = isset($data['scm']) ? $data['scm'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['link_url'] = isset($data['link_url']) ? $data['link_url'] : null;
        $this->container['clone_url'] = isset($data['clone_url']) ? $data['clone_url'] : null;
        $this->container['default_branch'] = isset($data['default_branch']) ? $data['default_branch'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
        $this->container['trusted'] = isset($data['trusted']) ? $data['trusted'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['allow_pr'] = isset($data['allow_pr']) ? $data['allow_pr'] : null;
        $this->container['allow_push'] = isset($data['allow_push']) ? $data['allow_push'] : null;
        $this->container['allow_deploys'] = isset($data['allow_deploys']) ? $data['allow_deploys'] : null;
        $this->container['allow_tags'] = isset($data['allow_tags']) ? $data['allow_tags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique identifier for the repository.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets scm
     * @return string
     */
    public function getScm()
    {
        return $this->container['scm'];
    }

    /**
     * Sets scm
     * @param string $scm The source control management being used.  Currently this is either 'git' or 'hg' (Mercurial).
     * @return $this
     */
    public function setScm($scm)
    {
        $this->container['scm'] = $scm;

        return $this;
    }

    /**
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param string $owner The owner of the repository.
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the repository.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets full_name
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     * @param string $full_name The full name of the repository.  This is created from the owner and name of the repository.
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets avatar_url
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     * @param string $avatar_url The url for the avatar image.
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets link_url
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->container['link_url'];
    }

    /**
     * Sets link_url
     * @param string $link_url The link to view the repository.
     * @return $this
     */
    public function setLinkUrl($link_url)
    {
        $this->container['link_url'] = $link_url;

        return $this;
    }

    /**
     * Gets clone_url
     * @return string
     */
    public function getCloneUrl()
    {
        return $this->container['clone_url'];
    }

    /**
     * Sets clone_url
     * @param string $clone_url The url used to clone the repository.
     * @return $this
     */
    public function setCloneUrl($clone_url)
    {
        $this->container['clone_url'] = $clone_url;

        return $this;
    }

    /**
     * Gets default_branch
     * @return string
     */
    public function getDefaultBranch()
    {
        return $this->container['default_branch'];
    }

    /**
     * Sets default_branch
     * @param string $default_branch The default branch of the repository.
     * @return $this
     */
    public function setDefaultBranch($default_branch)
    {
        $this->container['default_branch'] = $default_branch;

        return $this;
    }

    /**
     * Gets private
     * @return bool
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     * @param bool $private Whether the repository is publicly visible.
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets trusted
     * @return bool
     */
    public function getTrusted()
    {
        return $this->container['trusted'];
    }

    /**
     * Sets trusted
     * @param bool $trusted Whether the repository has trusted access for builds.  If the repository is trusted then the host network can be used and volumes can be created.
     * @return $this
     */
    public function setTrusted($trusted)
    {
        $this->container['trusted'] = $trusted;

        return $this;
    }

    /**
     * Gets timeout
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param int $timeout The amount of time in minutes before the build is killed.
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets allow_pr
     * @return bool
     */
    public function getAllowPr()
    {
        return $this->container['allow_pr'];
    }

    /**
     * Sets allow_pr
     * @param bool $allow_pr Whether pull requests should trigger a build.
     * @return $this
     */
    public function setAllowPr($allow_pr)
    {
        $this->container['allow_pr'] = $allow_pr;

        return $this;
    }

    /**
     * Gets allow_push
     * @return bool
     */
    public function getAllowPush()
    {
        return $this->container['allow_push'];
    }

    /**
     * Sets allow_push
     * @param bool $allow_push Whether push events should trigger a build.
     * @return $this
     */
    public function setAllowPush($allow_push)
    {
        $this->container['allow_push'] = $allow_push;

        return $this;
    }

    /**
     * Gets allow_deploys
     * @return bool
     */
    public function getAllowDeploys()
    {
        return $this->container['allow_deploys'];
    }

    /**
     * Sets allow_deploys
     * @param bool $allow_deploys Whether deployment events should trigger a build.
     * @return $this
     */
    public function setAllowDeploys($allow_deploys)
    {
        $this->container['allow_deploys'] = $allow_deploys;

        return $this;
    }

    /**
     * Gets allow_tags
     * @return bool
     */
    public function getAllowTags()
    {
        return $this->container['allow_tags'];
    }

    /**
     * Sets allow_tags
     * @param bool $allow_tags Whether tags should trigger a build.
     * @return $this
     */
    public function setAllowTags($allow_tags)
    {
        $this->container['allow_tags'] = $allow_tags;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DroneClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DroneClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


