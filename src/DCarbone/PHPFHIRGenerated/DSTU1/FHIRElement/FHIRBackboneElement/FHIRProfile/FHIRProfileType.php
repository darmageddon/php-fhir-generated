<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 8th, 2024 03:16+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAggregationMode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter;

/**
 * A Resource Profile - a statement of use of one or more FHIR Resources. It may
 * include constraints on Resources and Data Types, Terminology Binding Statements
 * and Extension Definitions.
 *
 * Class FHIRProfileType
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile
 */
class FHIRProfileType extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_TYPE;

    const FIELD_CODE = 'code';
    const FIELD_CODE_EXT = '_code';
    const FIELD_PROFILE = 'profile';
    const FIELD_PROFILE_EXT = '_profile';
    const FIELD_AGGREGATION = 'aggregation';
    const FIELD_AGGREGATION_EXT = '_aggregation';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Name of Data type or Resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $code = null;
    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a profile that SHALL hold for resources or datatypes referenced as
     * the type of this element. Can be a local reference - to another structure in
     * this profile, or a reference to a structure in another profile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $profile = null;
    /**
     * How resource references can be aggregated
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggreated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAggregationMode[]
     */
    protected null|array $aggregation = [];

    /**
     * Validation map for fields in type Profile.Type
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRProfileType Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_CODE, $data) || array_key_exists(self::FIELD_CODE_EXT, $data)) {
            $value = $data[self::FIELD_CODE] ?? null;
            $ext = (isset($data[self::FIELD_CODE_EXT]) && is_array($data[self::FIELD_CODE_EXT])) ? $data[self::FIELD_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setCode($value);
                } else if (is_array($value)) {
                    $this->setCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCode(new FHIRCode($ext));
            } else {
                $this->setCode(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_PROFILE, $data) || array_key_exists(self::FIELD_PROFILE_EXT, $data)) {
            $value = $data[self::FIELD_PROFILE] ?? null;
            $ext = (isset($data[self::FIELD_PROFILE_EXT]) && is_array($data[self::FIELD_PROFILE_EXT])) ? $data[self::FIELD_PROFILE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setProfile($value);
                } else if (is_array($value)) {
                    $this->setProfile(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setProfile(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setProfile(new FHIRUri($ext));
            } else {
                $this->setProfile(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_AGGREGATION, $data) || array_key_exists(self::FIELD_AGGREGATION_EXT, $data)) {
            $value = $data[self::FIELD_AGGREGATION] ?? null;
            $ext = (isset($data[self::FIELD_AGGREGATION_EXT]) && is_array($data[self::FIELD_AGGREGATION_EXT])) ? $data[self::FIELD_AGGREGATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAggregationMode) {
                    $this->addAggregation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRAggregationMode) {
                            $this->addAggregation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addAggregation(new FHIRAggregationMode(array_merge($v, $iext)));
                            } else {
                                $this->addAggregation(new FHIRAggregationMode([FHIRAggregationMode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addAggregation(new FHIRAggregationMode(array_merge($ext, $value)));
                } else {
                    $this->addAggregation(new FHIRAggregationMode([FHIRAggregationMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addAggregation(new FHIRAggregationMode($iext));
                }
            } else {
                $this->addAggregation(new FHIRAggregationMode(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Name of Data type or Resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode
     */
    public function getCode(): null|FHIRCode
    {
        return $this->code;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Name of Data type or Resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode $code
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCode(null|string|FHIRCodePrimitive|FHIRCode $code = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $code && !($code instanceof FHIRCode)) {
            $code = new FHIRCode($code);
        }
        $this->_trackValueSet($this->code, $code);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CODE])) {
            $this->_primitiveXmlLocations[self::FIELD_CODE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CODE][0] = $xmlLocation;
        $this->code = $code;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a profile that SHALL hold for resources or datatypes referenced as
     * the type of this element. Can be a local reference - to another structure in
     * this profile, or a reference to a structure in another profile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri
     */
    public function getProfile(): null|FHIRUri
    {
        return $this->profile;
    }

    /**
     * String of characters used to identify a name or a resource
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a profile that SHALL hold for resources or datatypes referenced as
     * the type of this element. Can be a local reference - to another structure in
     * this profile, or a reference to a structure in another profile.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri $profile
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setProfile(null|string|FHIRUriPrimitive|FHIRUri $profile = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $profile && !($profile instanceof FHIRUri)) {
            $profile = new FHIRUri($profile);
        }
        $this->_trackValueSet($this->profile, $profile);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PROFILE])) {
            $this->_primitiveXmlLocations[self::FIELD_PROFILE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PROFILE][0] = $xmlLocation;
        $this->profile = $profile;
        return $this;
    }

    /**
     * How resource references can be aggregated
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggreated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAggregationMode[]
     */
    public function getAggregation(): null|array
    {
        return $this->aggregation;
    }

    /**
     * How resource references can be aggregated
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If the type is a reference to another resource, how the resource is or can be
     * aggreated - is it a contained resource, or a reference, and if the context is a
     * bundle, is it included in the bundle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAggregationMode $aggregation
     * @return static
     */
    public function addAggregation(null|FHIRAggregationMode $aggregation = null): self
    {
        if (null === $aggregation) {
            $aggregation = new FHIRAggregationMode();
        }
        $this->_trackValueAdded();
        $this->aggregation[] = $aggregation;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROFILE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAggregation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AGGREGATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_TYPE, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROFILE])) {
            $v = $this->getProfile();
            foreach($validationRules[self::FIELD_PROFILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_TYPE, self::FIELD_PROFILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROFILE])) {
                        $errs[self::FIELD_PROFILE] = [];
                    }
                    $errs[self::FIELD_PROFILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGGREGATION])) {
            $v = $this->getAggregation();
            foreach($validationRules[self::FIELD_AGGREGATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_TYPE, self::FIELD_AGGREGATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGGREGATION])) {
                        $errs[self::FIELD_AGGREGATION] = [];
                    }
                    $errs[self::FIELD_AGGREGATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRProfileType)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_CODE === $childName) {
                $type->setCode(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PROFILE === $childName) {
                $type->setProfile(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AGGREGATION === $childName) {
                $type->addAggregation(FHIRAggregationMode::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_CODE])) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCode((string)$attributes[self::FIELD_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PROFILE])) {
            $pt = $type->getProfile();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setProfile((string)$attributes[self::FIELD_PROFILE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ProfileType', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCode())) {
            $xw->writeAttribute(self::FIELD_CODE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROFILE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getProfile())) {
            $xw->writeAttribute(self::FIELD_PROFILE, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCode())) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PROFILE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getProfile())) {
            $xw->startElement(self::FIELD_PROFILE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAggregation() as $v) {
            $xw->startElement(self::FIELD_AGGREGATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PROFILE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PROFILE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAggregation())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRAggregationMode::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_AGGREGATION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AGGREGATION_EXT} = $exts;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}