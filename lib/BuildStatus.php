<?php
/**
 * BuildStatus
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

/**
 * BuildStatus Class Doc Comment
 *
 * @category    Class
 * @description The status of a build.
 * @package     DroneClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BuildStatus
{
    /**
     * Possible values of this enum
     */
    const SUCCESS = 'success';
    const FAILURE = 'failure';
    const PENDING = 'pending';
    const STARTED = 'started';
    const ERROR = 'error';
    const KILLED = 'killed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCESS,
            self::FAILURE,
            self::PENDING,
            self::STARTED,
            self::ERROR,
            self::KILLED,
        ];
    }
}


