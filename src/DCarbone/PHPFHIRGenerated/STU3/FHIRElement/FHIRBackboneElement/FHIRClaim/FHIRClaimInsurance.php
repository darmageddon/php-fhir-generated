<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 *
 * Class FHIRClaimInsurance
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimInsurance extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_INSURANCE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_BUSINESS_ARRANGEMENT = 'businessArrangement';
    const FIELD_BUSINESS_ARRANGEMENT_EXT = '_businessArrangement';
    const FIELD_CLAIM_RESPONSE = 'claimResponse';
    const FIELD_COVERAGE = 'coverage';
    const FIELD_FOCAL = 'focal';
    const FIELD_FOCAL_EXT = '_focal';
    const FIELD_PRE_AUTH_REF = 'preAuthRef';
    const FIELD_PRE_AUTH_REF_EXT = '_preAuthRef';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The contract number of a business agreement which describes the terms and
     * conditions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $businessArrangement = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Coverages adjudication details.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $claimResponse = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $coverage = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag to indicate that this Coverage is the focus for adjudication. The
     * Coverage against which the claim is to be adjudicated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $focal = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    private $preAuthRef = [];
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Sequence of coverage which serves to provide a link and convey coordination of
     * benefit order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    private $sequence = null;

    /**
     * FHIRClaimInsurance Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimInsurance::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BUSINESS_ARRANGEMENT])) {
            $ext = (isset($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT]) && is_array($data[self::FIELD_BUSINESS_ARRANGEMENT_EXT]))
                ? $data[self::FIELD_BUSINESS_ARRANGEMENT_EXT]
                : null;
            if ($data[self::FIELD_BUSINESS_ARRANGEMENT] instanceof FHIRString) {
                $this->setBusinessArrangement($data[self::FIELD_BUSINESS_ARRANGEMENT]);
            } elseif ($ext && is_scalar($data[self::FIELD_BUSINESS_ARRANGEMENT])) {
                $this->setBusinessArrangement(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_BUSINESS_ARRANGEMENT]] + $ext));
            } else {
                $this->setBusinessArrangement(new FHIRString($data[self::FIELD_BUSINESS_ARRANGEMENT]));
            }
        }
        if (isset($data[self::FIELD_CLAIM_RESPONSE])) {
            if ($data[self::FIELD_CLAIM_RESPONSE] instanceof FHIRReference) {
                $this->setClaimResponse($data[self::FIELD_CLAIM_RESPONSE]);
            } else {
                $this->setClaimResponse(new FHIRReference($data[self::FIELD_CLAIM_RESPONSE]));
            }
        }
        if (isset($data[self::FIELD_COVERAGE])) {
            if ($data[self::FIELD_COVERAGE] instanceof FHIRReference) {
                $this->setCoverage($data[self::FIELD_COVERAGE]);
            } else {
                $this->setCoverage(new FHIRReference($data[self::FIELD_COVERAGE]));
            }
        }
        if (isset($data[self::FIELD_FOCAL])) {
            $ext = (isset($data[self::FIELD_FOCAL_EXT]) && is_array($data[self::FIELD_FOCAL_EXT]))
                ? $data[self::FIELD_FOCAL_EXT]
                : null;
            if ($data[self::FIELD_FOCAL] instanceof FHIRBoolean) {
                $this->setFocal($data[self::FIELD_FOCAL]);
            } elseif ($ext && is_scalar($data[self::FIELD_FOCAL])) {
                $this->setFocal(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_FOCAL]] + $ext));
            } else {
                $this->setFocal(new FHIRBoolean($data[self::FIELD_FOCAL]));
            }
        }
        if (isset($data[self::FIELD_PRE_AUTH_REF])) {
            $ext = (isset($data[self::FIELD_PRE_AUTH_REF_EXT]) && is_array($data[self::FIELD_PRE_AUTH_REF_EXT]))
                ? $data[self::FIELD_PRE_AUTH_REF_EXT]
                : null;
            if (is_array($data[self::FIELD_PRE_AUTH_REF])) {
                foreach($data[self::FIELD_PRE_AUTH_REF] as $i => $v) {
                    if ($v instanceof FHIRString) {
                        $this->addPreAuthRef($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addPreAuthRef(new FHIRString($v));
                    }
                }
            } elseif ($data[self::FIELD_PRE_AUTH_REF] instanceof FHIRString) {
                $this->addPreAuthRef($data[self::FIELD_PRE_AUTH_REF]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRE_AUTH_REF])) {
                $this->addPreAuthRef(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PRE_AUTH_REF]] + $ext));
            } else {
                $this->addPreAuthRef(new FHIRString($data[self::FIELD_PRE_AUTH_REF]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT]))
                ? $data[self::FIELD_SEQUENCE_EXT]
                : null;
            if ($data[self::FIELD_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->setSequence($data[self::FIELD_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SEQUENCE])) {
                $this->setSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_SEQUENCE]] + $ext));
            } else {
                $this->setSequence(new FHIRPositiveInt($data[self::FIELD_SEQUENCE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ClaimInsurance{$xmlns}></ClaimInsurance>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The contract number of a business agreement which describes the terms and
     * conditions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getBusinessArrangement()
    {
        return $this->businessArrangement;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The contract number of a business agreement which describes the terms and
     * conditions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $businessArrangement
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance
     */
    public function setBusinessArrangement($businessArrangement = null)
    {
        if (null === $businessArrangement) {
            $this->businessArrangement = null;
            return $this;
        }
        if ($businessArrangement instanceof FHIRString) {
            $this->businessArrangement = $businessArrangement;
            return $this;
        }
        $this->businessArrangement = new FHIRString($businessArrangement);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Coverages adjudication details.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The Coverages adjudication details.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $claimResponse
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance
     */
    public function setClaimResponse(FHIRReference $claimResponse = null)
    {
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Reference to the program or plan identification, underwriter or payor.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $coverage
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance
     */
    public function setCoverage(FHIRReference $coverage = null)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag to indicate that this Coverage is the focus for adjudication. The
     * Coverage against which the claim is to be adjudicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getFocal()
    {
        return $this->focal;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A flag to indicate that this Coverage is the focus for adjudication. The
     * Coverage against which the claim is to be adjudicated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $focal
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance
     */
    public function setFocal($focal = null)
    {
        if (null === $focal) {
            $this->focal = null;
            return $this;
        }
        if ($focal instanceof FHIRBoolean) {
            $this->focal = $focal;
            return $this;
        }
        $this->focal = new FHIRBoolean($focal);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $preAuthRef
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance
     */
    public function addPreAuthRef($preAuthRef = null)
    {
        if (null === $preAuthRef) {
            $this->preAuthRef = [];
            return $this;
        }
        if ($preAuthRef instanceof FHIRString) {
            $this->preAuthRef[] = $preAuthRef;
            return $this;
        }
        $this->preAuthRef[] = new FHIRString($preAuthRef);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A list of references from the Insurer to which these services pertain.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $preAuthRef
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance
     */
    public function setPreAuthRef(array $preAuthRef = [])
    {
        $this->preAuthRef = [];
        if ([] === $preAuthRef) {
            return $this;
        }
        foreach($preAuthRef as $v) {
            if ($v instanceof FHIRString) {
                $this->addPreAuthRef($v);
            } else {
                $this->addPreAuthRef(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Sequence of coverage which serves to provide a link and convey coordination of
     * benefit order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Sequence of coverage which serves to provide a link and convey coordination of
     * benefit order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $sequence
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance
     */
    public function setSequence($sequence = null)
    {
        if (null === $sequence) {
            $this->sequence = null;
            return $this;
        }
        if ($sequence instanceof FHIRPositiveInt) {
            $this->sequence = $sequence;
            return $this;
        }
        $this->sequence = new FHIRPositiveInt($sequence);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRClaimInsurance::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClaimInsurance::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRClaimInsurance;
        } elseif (!is_object($type) || !($type instanceof FHIRClaimInsurance)) {
            throw new \RuntimeException(sprintf(
                'FHIRClaimInsurance::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->businessArrangement)) {
            $type->setBusinessArrangement((string)$attributes->businessArrangement);
        }
        if (isset($children->businessArrangement)) {
            $type->setBusinessArrangement(FHIRString::xmlUnserialize($children->businessArrangement));
        }
        if (isset($children->claimResponse)) {
            $type->setClaimResponse(FHIRReference::xmlUnserialize($children->claimResponse));
        }
        if (isset($children->coverage)) {
            $type->setCoverage(FHIRReference::xmlUnserialize($children->coverage));
        }
        if (isset($attributes->focal)) {
            $type->setFocal((string)$attributes->focal);
        }
        if (isset($children->focal)) {
            $type->setFocal(FHIRBoolean::xmlUnserialize($children->focal));
        }
        if (isset($attributes->preAuthRef)) {
            $type->addPreAuthRef((string)$attributes->preAuthRef);
        }
        if (isset($children->preAuthRef)) {
            foreach($children->preAuthRef as $child) {
                $type->addPreAuthRef(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($attributes->sequence)) {
            $type->setSequence((string)$attributes->sequence);
        }
        if (isset($children->sequence)) {
            $type->setSequence(FHIRPositiveInt::xmlUnserialize($children->sequence));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getBusinessArrangement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BUSINESS_ARRANGEMENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getClaimResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLAIM_RESPONSE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getCoverage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COVERAGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getFocal())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_FOCAL, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPreAuthRef())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRE_AUTH_REF, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getBusinessArrangement())) {
            $a[self::FIELD_BUSINESS_ARRANGEMENT] = $v->getValue();
            $a[self::FIELD_BUSINESS_ARRANGEMENT_EXT] = $v;
        }
        if (null !== ($v = $this->getClaimResponse())) {
            $a[self::FIELD_CLAIM_RESPONSE] = $v;
        }
        if (null !== ($v = $this->getCoverage())) {
            $a[self::FIELD_COVERAGE] = $v;
        }
        if (null !== ($v = $this->getFocal())) {
            $a[self::FIELD_FOCAL] = $v->getValue();
            $a[self::FIELD_FOCAL_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPreAuthRef())) {
            $a[self::FIELD_PRE_AUTH_REF] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PRE_AUTH_REF][] = $v->getValue();
                $a[self::FIELD_PRE_AUTH_REF_EXT][] = $v;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            $a[self::FIELD_SEQUENCE] = $v->getValue();
            $a[self::FIELD_SEQUENCE_EXT] = $v;
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}