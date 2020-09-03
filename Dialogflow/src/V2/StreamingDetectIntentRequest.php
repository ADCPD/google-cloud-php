<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The top-level message sent by the client to the
 * [Sessions.StreamingDetectIntent][google.cloud.dialogflow.v2.Sessions.StreamingDetectIntent] method.
 * Multiple request messages should be sent in order:
 * 1.  The first message must contain
 * [session][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.session],
 *     [query_input][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.query_input] plus optionally
 *     [query_params][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.query_params]. If the client
 *     wants to receive an audio response, it should also contain
 *     [output_audio_config][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.output_audio_config].
 *     The message must not contain
 *     [input_audio][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.input_audio].
 * 2.  If [query_input][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.query_input] was set to
 *     [query_input.audio_config][google.cloud.dialogflow.v2.InputAudioConfig], all subsequent
 *     messages must contain
 *     [input_audio][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.input_audio] to continue with
 *     Speech recognition.
 *     If you decide to rather detect an intent from text input after you
 *     already started Speech recognition, please send a message with
 *     [query_input.text][google.cloud.dialogflow.v2.QueryInput.text].
 *     However, note that:
 *     * Dialogflow will bill you for the audio duration so far.
 *     * Dialogflow discards all Speech recognition results in favor of the
 *       input text.
 *     * Dialogflow will use the language code from the first message.
 * After you sent all input, you must half-close or abort the request stream.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.StreamingDetectIntentRequest</code>
 */
class StreamingDetectIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the session the query is sent to.
     * Format of the session name:
     * `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     * default 'draft' environment. If `User ID` is not specified, we are using
     * "-". It's up to the API caller to choose an appropriate `Session ID` and
     * `User Id`. They can be a random number or some type of user and session
     * identifiers (preferably hashed). The length of the `Session ID` and
     * `User ID` must not exceed 36 characters.
     * For more information, see the [API interactions
     * guide](https://cloud.google.com/dialogflow/docs/api-overview).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $session = '';
    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 2;</code>
     */
    private $query_params = null;
    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config which instructs the speech recognizer how to process
     *     the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $query_input = null;
    /**
     * Please use [InputAudioConfig.single_utterance][google.cloud.dialogflow.v2.InputAudioConfig.single_utterance] instead.
     * If `false` (default), recognition does not cease until
     * the client closes the stream. If `true`, the recognizer will detect a
     * single spoken utterance in input audio. Recognition ceases when it detects
     * the audio's voice has stopped or paused. In this case, once a detected
     * intent is received, the client should close the stream and start a new
     * request with a new stream as needed.
     * This setting is ignored when `query_input` is a piece of text or an event.
     *
     * Generated from protobuf field <code>bool single_utterance = 4 [deprecated = true];</code>
     */
    private $single_utterance = false;
    /**
     * Instructs the speech synthesizer how to generate the output
     * audio. If this field is not set and agent-level speech synthesizer is not
     * configured, no output audio is generated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig output_audio_config = 5;</code>
     */
    private $output_audio_config = null;
    /**
     * Mask for [output_audio_config][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.output_audio_config] indicating which settings in this
     * request-level config should override speech synthesizer settings defined at
     * agent-level.
     * If unspecified or empty, [output_audio_config][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.output_audio_config] replaces the agent-level
     * config in its entirety.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask output_audio_config_mask = 7;</code>
     */
    private $output_audio_config_mask = null;
    /**
     * The input audio content to be recognized. Must be sent if
     * `query_input` was set to a streaming input audio config. The complete audio
     * over all streaming messages must not exceed 1 minute.
     *
     * Generated from protobuf field <code>bytes input_audio = 6;</code>
     */
    private $input_audio = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Required. The name of the session the query is sent to.
     *           Format of the session name:
     *           `projects/<Project ID>/agent/sessions/<Session ID>`, or
     *           `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     *           ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     *           default 'draft' environment. If `User ID` is not specified, we are using
     *           "-". It's up to the API caller to choose an appropriate `Session ID` and
     *           `User Id`. They can be a random number or some type of user and session
     *           identifiers (preferably hashed). The length of the `Session ID` and
     *           `User ID` must not exceed 36 characters.
     *           For more information, see the [API interactions
     *           guide](https://cloud.google.com/dialogflow/docs/api-overview).
     *     @type \Google\Cloud\Dialogflow\V2\QueryParameters $query_params
     *           The parameters of this query.
     *     @type \Google\Cloud\Dialogflow\V2\QueryInput $query_input
     *           Required. The input specification. It can be set to:
     *           1.  an audio config which instructs the speech recognizer how to process
     *               the speech audio,
     *           2.  a conversational query in the form of text, or
     *           3.  an event that specifies which intent to trigger.
     *     @type bool $single_utterance
     *           Please use [InputAudioConfig.single_utterance][google.cloud.dialogflow.v2.InputAudioConfig.single_utterance] instead.
     *           If `false` (default), recognition does not cease until
     *           the client closes the stream. If `true`, the recognizer will detect a
     *           single spoken utterance in input audio. Recognition ceases when it detects
     *           the audio's voice has stopped or paused. In this case, once a detected
     *           intent is received, the client should close the stream and start a new
     *           request with a new stream as needed.
     *           This setting is ignored when `query_input` is a piece of text or an event.
     *     @type \Google\Cloud\Dialogflow\V2\OutputAudioConfig $output_audio_config
     *           Instructs the speech synthesizer how to generate the output
     *           audio. If this field is not set and agent-level speech synthesizer is not
     *           configured, no output audio is generated.
     *     @type \Google\Protobuf\FieldMask $output_audio_config_mask
     *           Mask for [output_audio_config][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.output_audio_config] indicating which settings in this
     *           request-level config should override speech synthesizer settings defined at
     *           agent-level.
     *           If unspecified or empty, [output_audio_config][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.output_audio_config] replaces the agent-level
     *           config in its entirety.
     *     @type string $input_audio
     *           The input audio content to be recognized. Must be sent if
     *           `query_input` was set to a streaming input audio config. The complete audio
     *           over all streaming messages must not exceed 1 minute.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the session the query is sent to.
     * Format of the session name:
     * `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     * default 'draft' environment. If `User ID` is not specified, we are using
     * "-". It's up to the API caller to choose an appropriate `Session ID` and
     * `User Id`. They can be a random number or some type of user and session
     * identifiers (preferably hashed). The length of the `Session ID` and
     * `User ID` must not exceed 36 characters.
     * For more information, see the [API interactions
     * guide](https://cloud.google.com/dialogflow/docs/api-overview).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The name of the session the query is sent to.
     * Format of the session name:
     * `projects/<Project ID>/agent/sessions/<Session ID>`, or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>`. If `Environment ID` is not specified, we assume
     * default 'draft' environment. If `User ID` is not specified, we are using
     * "-". It's up to the API caller to choose an appropriate `Session ID` and
     * `User Id`. They can be a random number or some type of user and session
     * identifiers (preferably hashed). The length of the `Session ID` and
     * `User ID` must not exceed 36 characters.
     * For more information, see the [API interactions
     * guide](https://cloud.google.com/dialogflow/docs/api-overview).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2\QueryParameters
     */
    public function getQueryParams()
    {
        return $this->query_params;
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\QueryParameters $var
     * @return $this
     */
    public function setQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\QueryParameters::class);
        $this->query_params = $var;

        return $this;
    }

    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config which instructs the speech recognizer how to process
     *     the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\QueryInput
     */
    public function getQueryInput()
    {
        return $this->query_input;
    }

    /**
     * Required. The input specification. It can be set to:
     * 1.  an audio config which instructs the speech recognizer how to process
     *     the speech audio,
     * 2.  a conversational query in the form of text, or
     * 3.  an event that specifies which intent to trigger.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\QueryInput $var
     * @return $this
     */
    public function setQueryInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\QueryInput::class);
        $this->query_input = $var;

        return $this;
    }

    /**
     * Please use [InputAudioConfig.single_utterance][google.cloud.dialogflow.v2.InputAudioConfig.single_utterance] instead.
     * If `false` (default), recognition does not cease until
     * the client closes the stream. If `true`, the recognizer will detect a
     * single spoken utterance in input audio. Recognition ceases when it detects
     * the audio's voice has stopped or paused. In this case, once a detected
     * intent is received, the client should close the stream and start a new
     * request with a new stream as needed.
     * This setting is ignored when `query_input` is a piece of text or an event.
     *
     * Generated from protobuf field <code>bool single_utterance = 4 [deprecated = true];</code>
     * @return bool
     */
    public function getSingleUtterance()
    {
        return $this->single_utterance;
    }

    /**
     * Please use [InputAudioConfig.single_utterance][google.cloud.dialogflow.v2.InputAudioConfig.single_utterance] instead.
     * If `false` (default), recognition does not cease until
     * the client closes the stream. If `true`, the recognizer will detect a
     * single spoken utterance in input audio. Recognition ceases when it detects
     * the audio's voice has stopped or paused. In this case, once a detected
     * intent is received, the client should close the stream and start a new
     * request with a new stream as needed.
     * This setting is ignored when `query_input` is a piece of text or an event.
     *
     * Generated from protobuf field <code>bool single_utterance = 4 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     */
    public function setSingleUtterance($var)
    {
        GPBUtil::checkBool($var);
        $this->single_utterance = $var;

        return $this;
    }

    /**
     * Instructs the speech synthesizer how to generate the output
     * audio. If this field is not set and agent-level speech synthesizer is not
     * configured, no output audio is generated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig output_audio_config = 5;</code>
     * @return \Google\Cloud\Dialogflow\V2\OutputAudioConfig
     */
    public function getOutputAudioConfig()
    {
        return $this->output_audio_config;
    }

    /**
     * Instructs the speech synthesizer how to generate the output
     * audio. If this field is not set and agent-level speech synthesizer is not
     * configured, no output audio is generated.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig output_audio_config = 5;</code>
     * @param \Google\Cloud\Dialogflow\V2\OutputAudioConfig $var
     * @return $this
     */
    public function setOutputAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\OutputAudioConfig::class);
        $this->output_audio_config = $var;

        return $this;
    }

    /**
     * Mask for [output_audio_config][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.output_audio_config] indicating which settings in this
     * request-level config should override speech synthesizer settings defined at
     * agent-level.
     * If unspecified or empty, [output_audio_config][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.output_audio_config] replaces the agent-level
     * config in its entirety.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask output_audio_config_mask = 7;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getOutputAudioConfigMask()
    {
        return $this->output_audio_config_mask;
    }

    /**
     * Mask for [output_audio_config][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.output_audio_config] indicating which settings in this
     * request-level config should override speech synthesizer settings defined at
     * agent-level.
     * If unspecified or empty, [output_audio_config][google.cloud.dialogflow.v2.StreamingDetectIntentRequest.output_audio_config] replaces the agent-level
     * config in its entirety.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask output_audio_config_mask = 7;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setOutputAudioConfigMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->output_audio_config_mask = $var;

        return $this;
    }

    /**
     * The input audio content to be recognized. Must be sent if
     * `query_input` was set to a streaming input audio config. The complete audio
     * over all streaming messages must not exceed 1 minute.
     *
     * Generated from protobuf field <code>bytes input_audio = 6;</code>
     * @return string
     */
    public function getInputAudio()
    {
        return $this->input_audio;
    }

    /**
     * The input audio content to be recognized. Must be sent if
     * `query_input` was set to a streaming input audio config. The complete audio
     * over all streaming messages must not exceed 1 minute.
     *
     * Generated from protobuf field <code>bytes input_audio = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setInputAudio($var)
    {
        GPBUtil::checkString($var, False);
        $this->input_audio = $var;

        return $this;
    }

}

