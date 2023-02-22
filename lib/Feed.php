<?php
/**
 * Feed
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

namespace DroneClient;

use \ArrayAccess;

/**
 * Feed Class Doc Comment
 *
 * @category    Class
 * @description A feed entry for a build.  Feed entries can be used to display information on the latest builds.
 * @package     DroneClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Feed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Feed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'owner' => 'string',
        'name' => 'string',
        'full_name' => 'string',
        'number' => 'int',
        'status' => '\DroneClient\DefinitionsBuildStatus',
        'created_at' => 'int',
        'enqueued_at' => 'int',
        'started_at' => 'int',
        'finished_at' => 'int',
        'commit' => 'string',
        'branch' => 'string',
        'message' => 'string',
        'timestamp' => 'int',
        'ref' => 'string',
        'refspec' => 'string',
        'remote' => 'string',
        'author' => 'string',
        'author_avatar' => 'string',
        'author_email' => 'string',
        'link_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'owner' => null,
        'name' => null,
        'full_name' => null,
        'number' => null,
        'status' => null,
        'created_at' => 'int64',
        'enqueued_at' => 'int64',
        'started_at' => 'int64',
        'finished_at' => 'int64',
        'commit' => null,
        'branch' => null,
        'message' => null,
        'timestamp' => 'int64',
        'ref' => null,
        'refspec' => null,
        'remote' => null,
        'author' => null,
        'author_avatar' => null,
        'author_email' => null,
        'link_url' => null
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
        'owner' => 'owner',
        'name' => 'name',
        'full_name' => 'full_name',
        'number' => 'number',
        'status' => 'status',
        'created_at' => 'created_at',
        'enqueued_at' => 'enqueued_at',
        'started_at' => 'started_at',
        'finished_at' => 'finished_at',
        'commit' => 'commit',
        'branch' => 'branch',
        'message' => 'message',
        'timestamp' => 'timestamp',
        'ref' => 'ref',
        'refspec' => 'refspec',
        'remote' => 'remote',
        'author' => 'author',
        'author_avatar' => 'author_avatar',
        'author_email' => 'author_email',
        'link_url' => 'link_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'owner' => 'setOwner',
        'name' => 'setName',
        'full_name' => 'setFullName',
        'number' => 'setNumber',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'enqueued_at' => 'setEnqueuedAt',
        'started_at' => 'setStartedAt',
        'finished_at' => 'setFinishedAt',
        'commit' => 'setCommit',
        'branch' => 'setBranch',
        'message' => 'setMessage',
        'timestamp' => 'setTimestamp',
        'ref' => 'setRef',
        'refspec' => 'setRefspec',
        'remote' => 'setRemote',
        'author' => 'setAuthor',
        'author_avatar' => 'setAuthorAvatar',
        'author_email' => 'setAuthorEmail',
        'link_url' => 'setLinkUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'owner' => 'getOwner',
        'name' => 'getName',
        'full_name' => 'getFullName',
        'number' => 'getNumber',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'enqueued_at' => 'getEnqueuedAt',
        'started_at' => 'getStartedAt',
        'finished_at' => 'getFinishedAt',
        'commit' => 'getCommit',
        'branch' => 'getBranch',
        'message' => 'getMessage',
        'timestamp' => 'getTimestamp',
        'ref' => 'getRef',
        'refspec' => 'getRefspec',
        'remote' => 'getRemote',
        'author' => 'getAuthor',
        'author_avatar' => 'getAuthorAvatar',
        'author_email' => 'getAuthorEmail',
        'link_url' => 'getLinkUrl'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['enqueued_at'] = isset($data['enqueued_at']) ? $data['enqueued_at'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
        $this->container['finished_at'] = isset($data['finished_at']) ? $data['finished_at'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['refspec'] = isset($data['refspec']) ? $data['refspec'] : null;
        $this->container['remote'] = isset($data['remote']) ? $data['remote'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['author_avatar'] = isset($data['author_avatar']) ? $data['author_avatar'] : null;
        $this->container['author_email'] = isset($data['author_email']) ? $data['author_email'] : null;
        $this->container['link_url'] = isset($data['link_url']) ? $data['link_url'] : null;
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
     * Gets number
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param int $number The build number.  This number is specified within the context of the repository the build belongs to and is unique within that.
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets status
     * @return \DroneClient\DefinitionsBuildStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \DroneClient\DefinitionsBuildStatus $status The current status of the build.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param int $created_at When the build request was received.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets enqueued_at
     * @return int
     */
    public function getEnqueuedAt()
    {
        return $this->container['enqueued_at'];
    }

    /**
     * Sets enqueued_at
     * @param int $enqueued_at When the build was enqueued.
     * @return $this
     */
    public function setEnqueuedAt($enqueued_at)
    {
        $this->container['enqueued_at'] = $enqueued_at;

        return $this;
    }

    /**
     * Gets started_at
     * @return int
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     * @param int $started_at When the build began execution.
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets finished_at
     * @return int
     */
    public function getFinishedAt()
    {
        return $this->container['finished_at'];
    }

    /**
     * Sets finished_at
     * @param int $finished_at When the build was finished.
     * @return $this
     */
    public function setFinishedAt($finished_at)
    {
        $this->container['finished_at'] = $finished_at;

        return $this;
    }

    /**
     * Gets commit
     * @return string
     */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
     * Sets commit
     * @param string $commit The commit for the build.
     * @return $this
     */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;

        return $this;
    }

    /**
     * Gets branch
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     * @param string $branch The branch the commit was pushed to.
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message The commit message.
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets timestamp
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param int $timestamp When the commit was created.
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets ref
     * @return string
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     * @param string $ref The alias for the commit.
     * @return $this
     */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets refspec
     * @return string
     */
    public function getRefspec()
    {
        return $this->container['refspec'];
    }

    /**
     * Sets refspec
     * @param string $refspec The mapping from the local repository to a branch in the remote.
     * @return $this
     */
    public function setRefspec($refspec)
    {
        $this->container['refspec'] = $refspec;

        return $this;
    }

    /**
     * Gets remote
     * @return string
     */
    public function getRemote()
    {
        return $this->container['remote'];
    }

    /**
     * Sets remote
     * @param string $remote The remote repository.
     * @return $this
     */
    public function setRemote($remote)
    {
        $this->container['remote'] = $remote;

        return $this;
    }

    /**
     * Gets author
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     * @param string $author The login for the author of the commit.
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets author_avatar
     * @return string
     */
    public function getAuthorAvatar()
    {
        return $this->container['author_avatar'];
    }

    /**
     * Sets author_avatar
     * @param string $author_avatar The avatar for the author of the commit.
     * @return $this
     */
    public function setAuthorAvatar($author_avatar)
    {
        $this->container['author_avatar'] = $author_avatar;

        return $this;
    }

    /**
     * Gets author_email
     * @return string
     */
    public function getAuthorEmail()
    {
        return $this->container['author_email'];
    }

    /**
     * Sets author_email
     * @param string $author_email The email for the author of the commit.
     * @return $this
     */
    public function setAuthorEmail($author_email)
    {
        $this->container['author_email'] = $author_email;

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
     * @param string $link_url The link to view the repository.  This link will point to the repository state associated with the build's commit.
     * @return $this
     */
    public function setLinkUrl($link_url)
    {
        $this->container['link_url'] = $link_url;

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


