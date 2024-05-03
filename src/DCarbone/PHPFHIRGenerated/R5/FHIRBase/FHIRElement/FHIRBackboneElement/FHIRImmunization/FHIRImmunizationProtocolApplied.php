<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 3rd, 2024 22:35+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
 * 
 *   Copyright (c) 2011+, HL7, Inc.
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Describes the event of a patient being administered a vaccine or a record of an
 * immunization as reported by a patient, a clinician or another party.
 *
 * Class FHIRImmunizationProtocolApplied
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization
 */
class FHIRImmunizationProtocolApplied extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_PROTOCOL_APPLIED;

    const FIELD_SERIES = 'series';
    const FIELD_SERIES_EXT = '_series';
    const FIELD_AUTHORITY = 'authority';
    const FIELD_TARGET_DISEASE = 'targetDisease';
    const FIELD_DOSE_NUMBER = 'doseNumber';
    const FIELD_DOSE_NUMBER_EXT = '_doseNumber';
    const FIELD_SERIES_DOSES = 'seriesDoses';
    const FIELD_SERIES_DOSES_EXT = '_seriesDoses';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $series = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol (e.g. ACIP) that is being
     * followed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $authority = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $targetDisease = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position in a series as intended by the practitioner administering the
     * dose.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $doseNumber = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity as intended by the
     * practitioner administering the dose.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $seriesDoses = null;

    /**
     * Validation map for fields in type Immunization.ProtocolApplied
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRImmunizationProtocolApplied Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_SERIES, $data) || array_key_exists(self::FIELD_SERIES_EXT, $data)) {
            $value = $data[self::FIELD_SERIES] ?? null;
            $ext = (isset($data[self::FIELD_SERIES_EXT]) && is_array($data[self::FIELD_SERIES_EXT])) ? $data[self::FIELD_SERIES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSeries($value);
                } else if (is_array($value)) {
                    $this->setSeries(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeries(new FHIRString($ext));
            } else {
                $this->setSeries(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_AUTHORITY, $data)) {
            if ($data[self::FIELD_AUTHORITY] instanceof FHIRReference) {
                $this->setAuthority($data[self::FIELD_AUTHORITY]);
            } else {
                $this->setAuthority(new FHIRReference($data[self::FIELD_AUTHORITY]));
            }
        }
        if (array_key_exists(self::FIELD_TARGET_DISEASE, $data)) {
            if (is_array($data[self::FIELD_TARGET_DISEASE])) {
                foreach($data[self::FIELD_TARGET_DISEASE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addTargetDisease($v);
                    } else {
                        $this->addTargetDisease(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET_DISEASE] instanceof FHIRCodeableConcept) {
                $this->addTargetDisease($data[self::FIELD_TARGET_DISEASE]);
            } else {
                $this->addTargetDisease(new FHIRCodeableConcept($data[self::FIELD_TARGET_DISEASE]));
            }
        }
        if (array_key_exists(self::FIELD_DOSE_NUMBER, $data) || array_key_exists(self::FIELD_DOSE_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_DOSE_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_EXT])) ? $data[self::FIELD_DOSE_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDoseNumber($value);
                } else if (is_array($value)) {
                    $this->setDoseNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDoseNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDoseNumber(new FHIRString($ext));
            } else {
                $this->setDoseNumber(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_SERIES_DOSES, $data) || array_key_exists(self::FIELD_SERIES_DOSES_EXT, $data)) {
            $value = $data[self::FIELD_SERIES_DOSES] ?? null;
            $ext = (isset($data[self::FIELD_SERIES_DOSES_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_EXT])) ? $data[self::FIELD_SERIES_DOSES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSeriesDoses($value);
                } else if (is_array($value)) {
                    $this->setSeriesDoses(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSeriesDoses(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeriesDoses(new FHIRString($ext));
            } else {
                $this->setSeriesDoses(new FHIRString(null));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getSeries(): null|FHIRString
    {
        return $this->series;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $series
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSeries(null|string|FHIRStringPrimitive|FHIRString $series = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $series && !($series instanceof FHIRString)) {
            $series = new FHIRString($series);
        }
        $this->_trackValueSet($this->series, $series);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SERIES])) {
            $this->_primitiveXmlLocations[self::FIELD_SERIES] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SERIES][0] = $xmlLocation;
        $this->series = $series;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol (e.g. ACIP) that is being
     * followed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getAuthority(): null|FHIRReference
    {
        return $this->authority;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol (e.g. ACIP) that is being
     * followed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $authority
     * @return static
     */
    public function setAuthority(null|FHIRReference $authority = null): self
    {
        if (null === $authority) {
            $authority = new FHIRReference();
        }
        $this->_trackValueSet($this->authority, $authority);
        $this->authority = $authority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getTargetDisease(): null|array
    {
        return $this->targetDisease;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $targetDisease
     * @return static
     */
    public function addTargetDisease(null|FHIRCodeableConcept $targetDisease = null): self
    {
        if (null === $targetDisease) {
            $targetDisease = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->targetDisease[] = $targetDisease;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position in a series as intended by the practitioner administering the
     * dose.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getDoseNumber(): null|FHIRString
    {
        return $this->doseNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position in a series as intended by the practitioner administering the
     * dose.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $doseNumber
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDoseNumber(null|string|FHIRStringPrimitive|FHIRString $doseNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $doseNumber && !($doseNumber instanceof FHIRString)) {
            $doseNumber = new FHIRString($doseNumber);
        }
        $this->_trackValueSet($this->doseNumber, $doseNumber);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DOSE_NUMBER])) {
            $this->_primitiveXmlLocations[self::FIELD_DOSE_NUMBER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DOSE_NUMBER][0] = $xmlLocation;
        $this->doseNumber = $doseNumber;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity as intended by the
     * practitioner administering the dose.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getSeriesDoses(): null|FHIRString
    {
        return $this->seriesDoses;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity as intended by the
     * practitioner administering the dose.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $seriesDoses
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSeriesDoses(null|string|FHIRStringPrimitive|FHIRString $seriesDoses = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $seriesDoses && !($seriesDoses instanceof FHIRString)) {
            $seriesDoses = new FHIRString($seriesDoses);
        }
        $this->_trackValueSet($this->seriesDoses, $seriesDoses);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SERIES_DOSES])) {
            $this->_primitiveXmlLocations[self::FIELD_SERIES_DOSES] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SERIES_DOSES][0] = $xmlLocation;
        $this->seriesDoses = $seriesDoses;
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
        if (null !== ($v = $this->getSeries())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTargetDisease())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET_DISEASE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDoseNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeriesDoses())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES_DOSES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_SERIES])) {
            $v = $this->getSeries();
            foreach($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_PROTOCOL_APPLIED, self::FIELD_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES])) {
                        $errs[self::FIELD_SERIES] = [];
                    }
                    $errs[self::FIELD_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORITY])) {
            $v = $this->getAuthority();
            foreach($validationRules[self::FIELD_AUTHORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_PROTOCOL_APPLIED, self::FIELD_AUTHORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORITY])) {
                        $errs[self::FIELD_AUTHORITY] = [];
                    }
                    $errs[self::FIELD_AUTHORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_DISEASE])) {
            $v = $this->getTargetDisease();
            foreach($validationRules[self::FIELD_TARGET_DISEASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_PROTOCOL_APPLIED, self::FIELD_TARGET_DISEASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_DISEASE])) {
                        $errs[self::FIELD_TARGET_DISEASE] = [];
                    }
                    $errs[self::FIELD_TARGET_DISEASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_NUMBER])) {
            $v = $this->getDoseNumber();
            foreach($validationRules[self::FIELD_DOSE_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_PROTOCOL_APPLIED, self::FIELD_DOSE_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_NUMBER])) {
                        $errs[self::FIELD_DOSE_NUMBER] = [];
                    }
                    $errs[self::FIELD_DOSE_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES])) {
            $v = $this->getSeriesDoses();
            foreach($validationRules[self::FIELD_SERIES_DOSES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_PROTOCOL_APPLIED, self::FIELD_SERIES_DOSES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES_DOSES])) {
                        $errs[self::FIELD_SERIES_DOSES] = [];
                    }
                    $errs[self::FIELD_SERIES_DOSES][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
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
        } else if (!($type instanceof FHIRImmunizationProtocolApplied)) {
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
            if (self::FIELD_SERIES === $childName) {
                $type->setSeries(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_AUTHORITY === $childName) {
                $type->setAuthority(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TARGET_DISEASE === $childName) {
                $type->addTargetDisease(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOSE_NUMBER === $childName) {
                $type->setDoseNumber(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_SERIES_DOSES === $childName) {
                $type->setSeriesDoses(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_SERIES])) {
            $pt = $type->getSeries();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SERIES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeries((string)$attributes[self::FIELD_SERIES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DOSE_NUMBER])) {
            $pt = $type->getDoseNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DOSE_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDoseNumber((string)$attributes[self::FIELD_DOSE_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SERIES_DOSES])) {
            $pt = $type->getSeriesDoses();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SERIES_DOSES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSeriesDoses((string)$attributes[self::FIELD_SERIES_DOSES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'ImmunizationProtocolApplied', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SERIES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSeries())) {
            $xw->writeAttribute(self::FIELD_SERIES, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DOSE_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDoseNumber())) {
            $xw->writeAttribute(self::FIELD_DOSE_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SERIES_DOSES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSeriesDoses())) {
            $xw->writeAttribute(self::FIELD_SERIES_DOSES, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_SERIES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSeries())) {
            $xw->startElement(self::FIELD_SERIES);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAuthority())) {
            $xw->startElement(self::FIELD_AUTHORITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getTargetDisease() as $v) {
            $xw->startElement(self::FIELD_TARGET_DISEASE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DOSE_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDoseNumber())) {
            $xw->startElement(self::FIELD_DOSE_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SERIES_DOSES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSeriesDoses())) {
            $xw->startElement(self::FIELD_SERIES_DOSES);
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
        if (null !== ($v = $this->getSeries())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERIES} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERIES_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAuthority())) {
            $out->{self::FIELD_AUTHORITY} = $v;
        }
        if ([] !== ($vs = $this->getTargetDisease())) {
            $out->{self::FIELD_TARGET_DISEASE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TARGET_DISEASE}[] = $v;
            }
        }
        if (null !== ($v = $this->getDoseNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOSE_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOSE_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSeriesDoses())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SERIES_DOSES} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SERIES_DOSES_EXT} = $ext;
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