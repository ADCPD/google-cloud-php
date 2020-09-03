<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IAM policy analysis query message.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisQuery</code>
 */
class IamPolicyAnalysisQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * The relative name of the root asset. Only resources and IAM policies within
     * the scope will be analyzed.
     * This can only be an organization number (such as "organizations/123"), a
     * folder number (such as "folders/123"), a project ID (such as
     * "projects/my-project-id"), or a project number (such as "projects/12345").
     * To know how to get organization id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).
     * To know how to get folder or project id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-folders#viewing_or_listing_folders_and_projects).
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $scope = '';
    /**
     * Specifies a resource for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ResourceSelector resource_selector = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $resource_selector = null;
    /**
     * Specifies an identity for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.IdentitySelector identity_selector = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $identity_selector = null;
    /**
     * Specifies roles or permissions for analysis. This is optional.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.AccessSelector access_selector = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $access_selector = null;
    /**
     * The query options.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.Options options = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope
     *           The relative name of the root asset. Only resources and IAM policies within
     *           the scope will be analyzed.
     *           This can only be an organization number (such as "organizations/123"), a
     *           folder number (such as "folders/123"), a project ID (such as
     *           "projects/my-project-id"), or a project number (such as "projects/12345").
     *           To know how to get organization id, visit [here
     *           ](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).
     *           To know how to get folder or project id, visit [here
     *           ](https://cloud.google.com/resource-manager/docs/creating-managing-folders#viewing_or_listing_folders_and_projects).
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ResourceSelector $resource_selector
     *           Specifies a resource for analysis.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\IdentitySelector $identity_selector
     *           Specifies an identity for analysis.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\AccessSelector $access_selector
     *           Specifies roles or permissions for analysis. This is optional.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\Options $options
     *           The query options.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The relative name of the root asset. Only resources and IAM policies within
     * the scope will be analyzed.
     * This can only be an organization number (such as "organizations/123"), a
     * folder number (such as "folders/123"), a project ID (such as
     * "projects/my-project-id"), or a project number (such as "projects/12345").
     * To know how to get organization id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).
     * To know how to get folder or project id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-folders#viewing_or_listing_folders_and_projects).
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * The relative name of the root asset. Only resources and IAM policies within
     * the scope will be analyzed.
     * This can only be an organization number (such as "organizations/123"), a
     * folder number (such as "folders/123"), a project ID (such as
     * "projects/my-project-id"), or a project number (such as "projects/12345").
     * To know how to get organization id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).
     * To know how to get folder or project id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-folders#viewing_or_listing_folders_and_projects).
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Specifies a resource for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ResourceSelector resource_selector = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ResourceSelector
     */
    public function getResourceSelector()
    {
        return isset($this->resource_selector) ? $this->resource_selector : null;
    }

    public function hasResourceSelector()
    {
        return isset($this->resource_selector);
    }

    public function clearResourceSelector()
    {
        unset($this->resource_selector);
    }

    /**
     * Specifies a resource for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ResourceSelector resource_selector = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ResourceSelector $var
     * @return $this
     */
    public function setResourceSelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ResourceSelector::class);
        $this->resource_selector = $var;

        return $this;
    }

    /**
     * Specifies an identity for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.IdentitySelector identity_selector = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\IdentitySelector
     */
    public function getIdentitySelector()
    {
        return isset($this->identity_selector) ? $this->identity_selector : null;
    }

    public function hasIdentitySelector()
    {
        return isset($this->identity_selector);
    }

    public function clearIdentitySelector()
    {
        unset($this->identity_selector);
    }

    /**
     * Specifies an identity for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.IdentitySelector identity_selector = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\IdentitySelector $var
     * @return $this
     */
    public function setIdentitySelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\IdentitySelector::class);
        $this->identity_selector = $var;

        return $this;
    }

    /**
     * Specifies roles or permissions for analysis. This is optional.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.AccessSelector access_selector = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\AccessSelector
     */
    public function getAccessSelector()
    {
        return isset($this->access_selector) ? $this->access_selector : null;
    }

    public function hasAccessSelector()
    {
        return isset($this->access_selector);
    }

    public function clearAccessSelector()
    {
        unset($this->access_selector);
    }

    /**
     * Specifies roles or permissions for analysis. This is optional.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.AccessSelector access_selector = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\AccessSelector $var
     * @return $this
     */
    public function setAccessSelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\AccessSelector::class);
        $this->access_selector = $var;

        return $this;
    }

    /**
     * The query options.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.Options options = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\Options
     */
    public function getOptions()
    {
        return isset($this->options) ? $this->options : null;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * The query options.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.Options options = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\Options $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\Options::class);
        $this->options = $var;

        return $this;
    }

}

