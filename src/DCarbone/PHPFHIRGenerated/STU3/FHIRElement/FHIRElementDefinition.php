<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement;

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

use DCarbone\PHPFHIRGenerated\STU3\FHIRBase64BinaryPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRTimePrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinition
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement
 */
class FHIRElementDefinition extends FHIRElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION;

    const FIELD_PATH = 'path';
    const FIELD_PATH_EXT = '_path';
    const FIELD_REPRESENTATION = 'representation';
    const FIELD_REPRESENTATION_EXT = '_representation';
    const FIELD_SLICE_NAME = 'sliceName';
    const FIELD_SLICE_NAME_EXT = '_sliceName';
    const FIELD_LABEL = 'label';
    const FIELD_LABEL_EXT = '_label';
    const FIELD_CODE = 'code';
    const FIELD_SLICING = 'slicing';
    const FIELD_SHORT = 'short';
    const FIELD_SHORT_EXT = '_short';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEFINITION_EXT = '_definition';
    const FIELD_COMMENT = 'comment';
    const FIELD_COMMENT_EXT = '_comment';
    const FIELD_REQUIREMENTS = 'requirements';
    const FIELD_REQUIREMENTS_EXT = '_requirements';
    const FIELD_ALIAS = 'alias';
    const FIELD_ALIAS_EXT = '_alias';
    const FIELD_MIN = 'min';
    const FIELD_MIN_EXT = '_min';
    const FIELD_MAX = 'max';
    const FIELD_MAX_EXT = '_max';
    const FIELD_BASE = 'base';
    const FIELD_CONTENT_REFERENCE = 'contentReference';
    const FIELD_CONTENT_REFERENCE_EXT = '_contentReference';
    const FIELD_TYPE = 'type';
    const FIELD_DEFAULT_VALUE_BASE_64BINARY = 'defaultValueBase64Binary';
    const FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT = '_defaultValueBase64Binary';
    const FIELD_DEFAULT_VALUE_BOOLEAN = 'defaultValueBoolean';
    const FIELD_DEFAULT_VALUE_BOOLEAN_EXT = '_defaultValueBoolean';
    const FIELD_DEFAULT_VALUE_CODE = 'defaultValueCode';
    const FIELD_DEFAULT_VALUE_CODE_EXT = '_defaultValueCode';
    const FIELD_DEFAULT_VALUE_DATE = 'defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_EXT = '_defaultValueDate';
    const FIELD_DEFAULT_VALUE_DATE_TIME = 'defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DATE_TIME_EXT = '_defaultValueDateTime';
    const FIELD_DEFAULT_VALUE_DECIMAL = 'defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_DECIMAL_EXT = '_defaultValueDecimal';
    const FIELD_DEFAULT_VALUE_ID = 'defaultValueId';
    const FIELD_DEFAULT_VALUE_ID_EXT = '_defaultValueId';
    const FIELD_DEFAULT_VALUE_INSTANT = 'defaultValueInstant';
    const FIELD_DEFAULT_VALUE_INSTANT_EXT = '_defaultValueInstant';
    const FIELD_DEFAULT_VALUE_INTEGER = 'defaultValueInteger';
    const FIELD_DEFAULT_VALUE_INTEGER_EXT = '_defaultValueInteger';
    const FIELD_DEFAULT_VALUE_MARKDOWN = 'defaultValueMarkdown';
    const FIELD_DEFAULT_VALUE_MARKDOWN_EXT = '_defaultValueMarkdown';
    const FIELD_DEFAULT_VALUE_OID = 'defaultValueOid';
    const FIELD_DEFAULT_VALUE_OID_EXT = '_defaultValueOid';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT = 'defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT = '_defaultValuePositiveInt';
    const FIELD_DEFAULT_VALUE_STRING = 'defaultValueString';
    const FIELD_DEFAULT_VALUE_STRING_EXT = '_defaultValueString';
    const FIELD_DEFAULT_VALUE_TIME = 'defaultValueTime';
    const FIELD_DEFAULT_VALUE_TIME_EXT = '_defaultValueTime';
    const FIELD_DEFAULT_VALUE_UNSIGNED_INT = 'defaultValueUnsignedInt';
    const FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT = '_defaultValueUnsignedInt';
    const FIELD_DEFAULT_VALUE_URI = 'defaultValueUri';
    const FIELD_DEFAULT_VALUE_URI_EXT = '_defaultValueUri';
    const FIELD_DEFAULT_VALUE_ADDRESS = 'defaultValueAddress';
    const FIELD_DEFAULT_VALUE_AGE = 'defaultValueAge';
    const FIELD_DEFAULT_VALUE_ANNOTATION = 'defaultValueAnnotation';
    const FIELD_DEFAULT_VALUE_ATTACHMENT = 'defaultValueAttachment';
    const FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT = 'defaultValueCodeableConcept';
    const FIELD_DEFAULT_VALUE_CODING = 'defaultValueCoding';
    const FIELD_DEFAULT_VALUE_CONTACT_POINT = 'defaultValueContactPoint';
    const FIELD_DEFAULT_VALUE_COUNT = 'defaultValueCount';
    const FIELD_DEFAULT_VALUE_DISTANCE = 'defaultValueDistance';
    const FIELD_DEFAULT_VALUE_DURATION = 'defaultValueDuration';
    const FIELD_DEFAULT_VALUE_HUMAN_NAME = 'defaultValueHumanName';
    const FIELD_DEFAULT_VALUE_IDENTIFIER = 'defaultValueIdentifier';
    const FIELD_DEFAULT_VALUE_MONEY = 'defaultValueMoney';
    const FIELD_DEFAULT_VALUE_PERIOD = 'defaultValuePeriod';
    const FIELD_DEFAULT_VALUE_QUANTITY = 'defaultValueQuantity';
    const FIELD_DEFAULT_VALUE_RANGE = 'defaultValueRange';
    const FIELD_DEFAULT_VALUE_RATIO = 'defaultValueRatio';
    const FIELD_DEFAULT_VALUE_REFERENCE = 'defaultValueReference';
    const FIELD_DEFAULT_VALUE_SAMPLED_DATA = 'defaultValueSampledData';
    const FIELD_DEFAULT_VALUE_SIGNATURE = 'defaultValueSignature';
    const FIELD_DEFAULT_VALUE_TIMING = 'defaultValueTiming';
    const FIELD_DEFAULT_VALUE_META = 'defaultValueMeta';
    const FIELD_MEANING_WHEN_MISSING = 'meaningWhenMissing';
    const FIELD_MEANING_WHEN_MISSING_EXT = '_meaningWhenMissing';
    const FIELD_ORDER_MEANING = 'orderMeaning';
    const FIELD_ORDER_MEANING_EXT = '_orderMeaning';
    const FIELD_FIXED_BASE_64BINARY = 'fixedBase64Binary';
    const FIELD_FIXED_BASE_64BINARY_EXT = '_fixedBase64Binary';
    const FIELD_FIXED_BOOLEAN = 'fixedBoolean';
    const FIELD_FIXED_BOOLEAN_EXT = '_fixedBoolean';
    const FIELD_FIXED_CODE = 'fixedCode';
    const FIELD_FIXED_CODE_EXT = '_fixedCode';
    const FIELD_FIXED_DATE = 'fixedDate';
    const FIELD_FIXED_DATE_EXT = '_fixedDate';
    const FIELD_FIXED_DATE_TIME = 'fixedDateTime';
    const FIELD_FIXED_DATE_TIME_EXT = '_fixedDateTime';
    const FIELD_FIXED_DECIMAL = 'fixedDecimal';
    const FIELD_FIXED_DECIMAL_EXT = '_fixedDecimal';
    const FIELD_FIXED_ID = 'fixedId';
    const FIELD_FIXED_ID_EXT = '_fixedId';
    const FIELD_FIXED_INSTANT = 'fixedInstant';
    const FIELD_FIXED_INSTANT_EXT = '_fixedInstant';
    const FIELD_FIXED_INTEGER = 'fixedInteger';
    const FIELD_FIXED_INTEGER_EXT = '_fixedInteger';
    const FIELD_FIXED_MARKDOWN = 'fixedMarkdown';
    const FIELD_FIXED_MARKDOWN_EXT = '_fixedMarkdown';
    const FIELD_FIXED_OID = 'fixedOid';
    const FIELD_FIXED_OID_EXT = '_fixedOid';
    const FIELD_FIXED_POSITIVE_INT = 'fixedPositiveInt';
    const FIELD_FIXED_POSITIVE_INT_EXT = '_fixedPositiveInt';
    const FIELD_FIXED_STRING = 'fixedString';
    const FIELD_FIXED_STRING_EXT = '_fixedString';
    const FIELD_FIXED_TIME = 'fixedTime';
    const FIELD_FIXED_TIME_EXT = '_fixedTime';
    const FIELD_FIXED_UNSIGNED_INT = 'fixedUnsignedInt';
    const FIELD_FIXED_UNSIGNED_INT_EXT = '_fixedUnsignedInt';
    const FIELD_FIXED_URI = 'fixedUri';
    const FIELD_FIXED_URI_EXT = '_fixedUri';
    const FIELD_FIXED_ADDRESS = 'fixedAddress';
    const FIELD_FIXED_AGE = 'fixedAge';
    const FIELD_FIXED_ANNOTATION = 'fixedAnnotation';
    const FIELD_FIXED_ATTACHMENT = 'fixedAttachment';
    const FIELD_FIXED_CODEABLE_CONCEPT = 'fixedCodeableConcept';
    const FIELD_FIXED_CODING = 'fixedCoding';
    const FIELD_FIXED_CONTACT_POINT = 'fixedContactPoint';
    const FIELD_FIXED_COUNT = 'fixedCount';
    const FIELD_FIXED_DISTANCE = 'fixedDistance';
    const FIELD_FIXED_DURATION = 'fixedDuration';
    const FIELD_FIXED_HUMAN_NAME = 'fixedHumanName';
    const FIELD_FIXED_IDENTIFIER = 'fixedIdentifier';
    const FIELD_FIXED_MONEY = 'fixedMoney';
    const FIELD_FIXED_PERIOD = 'fixedPeriod';
    const FIELD_FIXED_QUANTITY = 'fixedQuantity';
    const FIELD_FIXED_RANGE = 'fixedRange';
    const FIELD_FIXED_RATIO = 'fixedRatio';
    const FIELD_FIXED_REFERENCE = 'fixedReference';
    const FIELD_FIXED_SAMPLED_DATA = 'fixedSampledData';
    const FIELD_FIXED_SIGNATURE = 'fixedSignature';
    const FIELD_FIXED_TIMING = 'fixedTiming';
    const FIELD_FIXED_META = 'fixedMeta';
    const FIELD_PATTERN_BASE_64BINARY = 'patternBase64Binary';
    const FIELD_PATTERN_BASE_64BINARY_EXT = '_patternBase64Binary';
    const FIELD_PATTERN_BOOLEAN = 'patternBoolean';
    const FIELD_PATTERN_BOOLEAN_EXT = '_patternBoolean';
    const FIELD_PATTERN_CODE = 'patternCode';
    const FIELD_PATTERN_CODE_EXT = '_patternCode';
    const FIELD_PATTERN_DATE = 'patternDate';
    const FIELD_PATTERN_DATE_EXT = '_patternDate';
    const FIELD_PATTERN_DATE_TIME = 'patternDateTime';
    const FIELD_PATTERN_DATE_TIME_EXT = '_patternDateTime';
    const FIELD_PATTERN_DECIMAL = 'patternDecimal';
    const FIELD_PATTERN_DECIMAL_EXT = '_patternDecimal';
    const FIELD_PATTERN_ID = 'patternId';
    const FIELD_PATTERN_ID_EXT = '_patternId';
    const FIELD_PATTERN_INSTANT = 'patternInstant';
    const FIELD_PATTERN_INSTANT_EXT = '_patternInstant';
    const FIELD_PATTERN_INTEGER = 'patternInteger';
    const FIELD_PATTERN_INTEGER_EXT = '_patternInteger';
    const FIELD_PATTERN_MARKDOWN = 'patternMarkdown';
    const FIELD_PATTERN_MARKDOWN_EXT = '_patternMarkdown';
    const FIELD_PATTERN_OID = 'patternOid';
    const FIELD_PATTERN_OID_EXT = '_patternOid';
    const FIELD_PATTERN_POSITIVE_INT = 'patternPositiveInt';
    const FIELD_PATTERN_POSITIVE_INT_EXT = '_patternPositiveInt';
    const FIELD_PATTERN_STRING = 'patternString';
    const FIELD_PATTERN_STRING_EXT = '_patternString';
    const FIELD_PATTERN_TIME = 'patternTime';
    const FIELD_PATTERN_TIME_EXT = '_patternTime';
    const FIELD_PATTERN_UNSIGNED_INT = 'patternUnsignedInt';
    const FIELD_PATTERN_UNSIGNED_INT_EXT = '_patternUnsignedInt';
    const FIELD_PATTERN_URI = 'patternUri';
    const FIELD_PATTERN_URI_EXT = '_patternUri';
    const FIELD_PATTERN_ADDRESS = 'patternAddress';
    const FIELD_PATTERN_AGE = 'patternAge';
    const FIELD_PATTERN_ANNOTATION = 'patternAnnotation';
    const FIELD_PATTERN_ATTACHMENT = 'patternAttachment';
    const FIELD_PATTERN_CODEABLE_CONCEPT = 'patternCodeableConcept';
    const FIELD_PATTERN_CODING = 'patternCoding';
    const FIELD_PATTERN_CONTACT_POINT = 'patternContactPoint';
    const FIELD_PATTERN_COUNT = 'patternCount';
    const FIELD_PATTERN_DISTANCE = 'patternDistance';
    const FIELD_PATTERN_DURATION = 'patternDuration';
    const FIELD_PATTERN_HUMAN_NAME = 'patternHumanName';
    const FIELD_PATTERN_IDENTIFIER = 'patternIdentifier';
    const FIELD_PATTERN_MONEY = 'patternMoney';
    const FIELD_PATTERN_PERIOD = 'patternPeriod';
    const FIELD_PATTERN_QUANTITY = 'patternQuantity';
    const FIELD_PATTERN_RANGE = 'patternRange';
    const FIELD_PATTERN_RATIO = 'patternRatio';
    const FIELD_PATTERN_REFERENCE = 'patternReference';
    const FIELD_PATTERN_SAMPLED_DATA = 'patternSampledData';
    const FIELD_PATTERN_SIGNATURE = 'patternSignature';
    const FIELD_PATTERN_TIMING = 'patternTiming';
    const FIELD_PATTERN_META = 'patternMeta';
    const FIELD_EXAMPLE = 'example';
    const FIELD_MIN_VALUE_DATE = 'minValueDate';
    const FIELD_MIN_VALUE_DATE_EXT = '_minValueDate';
    const FIELD_MIN_VALUE_DATE_TIME = 'minValueDateTime';
    const FIELD_MIN_VALUE_DATE_TIME_EXT = '_minValueDateTime';
    const FIELD_MIN_VALUE_INSTANT = 'minValueInstant';
    const FIELD_MIN_VALUE_INSTANT_EXT = '_minValueInstant';
    const FIELD_MIN_VALUE_TIME = 'minValueTime';
    const FIELD_MIN_VALUE_TIME_EXT = '_minValueTime';
    const FIELD_MIN_VALUE_DECIMAL = 'minValueDecimal';
    const FIELD_MIN_VALUE_DECIMAL_EXT = '_minValueDecimal';
    const FIELD_MIN_VALUE_INTEGER = 'minValueInteger';
    const FIELD_MIN_VALUE_INTEGER_EXT = '_minValueInteger';
    const FIELD_MIN_VALUE_POSITIVE_INT = 'minValuePositiveInt';
    const FIELD_MIN_VALUE_POSITIVE_INT_EXT = '_minValuePositiveInt';
    const FIELD_MIN_VALUE_UNSIGNED_INT = 'minValueUnsignedInt';
    const FIELD_MIN_VALUE_UNSIGNED_INT_EXT = '_minValueUnsignedInt';
    const FIELD_MIN_VALUE_QUANTITY = 'minValueQuantity';
    const FIELD_MAX_VALUE_DATE = 'maxValueDate';
    const FIELD_MAX_VALUE_DATE_EXT = '_maxValueDate';
    const FIELD_MAX_VALUE_DATE_TIME = 'maxValueDateTime';
    const FIELD_MAX_VALUE_DATE_TIME_EXT = '_maxValueDateTime';
    const FIELD_MAX_VALUE_INSTANT = 'maxValueInstant';
    const FIELD_MAX_VALUE_INSTANT_EXT = '_maxValueInstant';
    const FIELD_MAX_VALUE_TIME = 'maxValueTime';
    const FIELD_MAX_VALUE_TIME_EXT = '_maxValueTime';
    const FIELD_MAX_VALUE_DECIMAL = 'maxValueDecimal';
    const FIELD_MAX_VALUE_DECIMAL_EXT = '_maxValueDecimal';
    const FIELD_MAX_VALUE_INTEGER = 'maxValueInteger';
    const FIELD_MAX_VALUE_INTEGER_EXT = '_maxValueInteger';
    const FIELD_MAX_VALUE_POSITIVE_INT = 'maxValuePositiveInt';
    const FIELD_MAX_VALUE_POSITIVE_INT_EXT = '_maxValuePositiveInt';
    const FIELD_MAX_VALUE_UNSIGNED_INT = 'maxValueUnsignedInt';
    const FIELD_MAX_VALUE_UNSIGNED_INT_EXT = '_maxValueUnsignedInt';
    const FIELD_MAX_VALUE_QUANTITY = 'maxValueQuantity';
    const FIELD_MAX_LENGTH = 'maxLength';
    const FIELD_MAX_LENGTH_EXT = '_maxLength';
    const FIELD_CONDITION = 'condition';
    const FIELD_CONDITION_EXT = '_condition';
    const FIELD_CONSTRAINT = 'constraint';
    const FIELD_MUST_SUPPORT = 'mustSupport';
    const FIELD_MUST_SUPPORT_EXT = '_mustSupport';
    const FIELD_IS_MODIFIER = 'isModifier';
    const FIELD_IS_MODIFIER_EXT = '_isModifier';
    const FIELD_IS_SUMMARY = 'isSummary';
    const FIELD_IS_SUMMARY_EXT = '_isSummary';
    const FIELD_BINDING = 'binding';
    const FIELD_MAPPING = 'mapping';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The path identifies the element and is expressed as a "."-separated list of
     * ancestor elements, beginning with the name of the resource or extension.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $path = null;
    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPropertyRepresentation[]
     */
    protected null|array $representation = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of this element definition slice, when slicing is working. The name
     * must be a token with no dots or spaces. This is a unique name referring to a
     * specific set of constraints applied to this element, used to provide a name to
     * different slices of the same element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $sliceName = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A single preferred label which is the text to display beside the element
     * indicating its meaning or to use to prompt for the element in a user display or
     * form.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $label = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    protected null|array $code = [];
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that the element is sliced into a set of alternative definitions (i.e.
     * in a structure definition, there are multiple different constraints on a single
     * element in the base resource). Slicing can be used in any resource that has
     * cardinality ..* on the base resource, or any resource with a choice of types.
     * The set of slices is any elements that come after this in the element sequence
     * that have the same path, until a shorter path occurs (the shorter path
     * terminates the set).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    protected null|FHIRElementDefinitionSlicing $slicing = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise description of what this element means (e.g. for use in autogenerated
     * summaries).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $short = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a complete explanation of the meaning of the data element for human
     * readability. For the case of elements derived from existing elements (e.g.
     * constraints), the definition SHALL be consistent with the base definition, but
     * convey the meaning of the element in the particular context of use of the
     * resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $definition = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanatory notes and implementation guidance about the data element, including
     * notes about how to use the data properly, exceptions to proper use, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $comment = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * This element is for traceability of why the element was created and why the
     * constraints exist as they do. This may be used to point to source materials or
     * specifications that drove the structure of this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $requirements = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    protected null|array $alias = [];
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $min = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $max = null;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the base definition of the element, provided to make it
     * unnecessary for tools to trace the deviation of the element through the derived
     * and related profiles. This information is provided when the element definition
     * is not the original definition of an element - i.g. either in a constraint on
     * another type, or for elements from a super type in a snap shot.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    protected null|FHIRElementDefinitionBase $base = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the identity of an element defined elsewhere in the profile whose
     * content rules should be applied to the current element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $contentReference = null;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    protected null|array $type = [];
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    protected null|FHIRBase64Binary $defaultValueBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $defaultValueBoolean = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $defaultValueCode = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $defaultValueDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $defaultValueDateTime = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $defaultValueDecimal = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $defaultValueId = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $defaultValueInstant = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $defaultValueInteger = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $defaultValueMarkdown = null;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    protected null|FHIROid $defaultValueOid = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $defaultValuePositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $defaultValueString = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $defaultValueTime = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $defaultValueUnsignedInt = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $defaultValueUri = null;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    protected null|FHIRAddress $defaultValueAddress = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $defaultValueAge = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    protected null|FHIRAnnotation $defaultValueAnnotation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $defaultValueAttachment = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $defaultValueCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $defaultValueCoding = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    protected null|FHIRContactPoint $defaultValueContactPoint = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    protected null|FHIRCount $defaultValueCount = null;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    protected null|FHIRDistance $defaultValueDistance = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $defaultValueDuration = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    protected null|FHIRHumanName $defaultValueHumanName = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $defaultValueIdentifier = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected null|FHIRMoney $defaultValueMoney = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $defaultValuePeriod = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $defaultValueQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $defaultValueRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $defaultValueRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $defaultValueReference = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    protected null|FHIRSampledData $defaultValueSampledData = null;
    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    protected null|FHIRSignature $defaultValueSignature = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    protected null|FHIRTiming $defaultValueTiming = null;
    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    protected null|FHIRMeta $defaultValueMeta = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Implicit meaning that is to be understood when this element is missing (e.g.
     * 'when this element is missing, the period is ongoing'.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $meaningWhenMissing = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the order of the repeating element has meaning and
     * describes what that meaning is. If absent, it means that the order of the
     * element has no meaning.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $orderMeaning = null;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    protected null|FHIRBase64Binary $fixedBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $fixedBoolean = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $fixedCode = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $fixedDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $fixedDateTime = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $fixedDecimal = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $fixedId = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $fixedInstant = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $fixedInteger = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $fixedMarkdown = null;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    protected null|FHIROid $fixedOid = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $fixedPositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $fixedString = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $fixedTime = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $fixedUnsignedInt = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $fixedUri = null;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    protected null|FHIRAddress $fixedAddress = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $fixedAge = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    protected null|FHIRAnnotation $fixedAnnotation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $fixedAttachment = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $fixedCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $fixedCoding = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    protected null|FHIRContactPoint $fixedContactPoint = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    protected null|FHIRCount $fixedCount = null;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    protected null|FHIRDistance $fixedDistance = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $fixedDuration = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    protected null|FHIRHumanName $fixedHumanName = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $fixedIdentifier = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected null|FHIRMoney $fixedMoney = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $fixedPeriod = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $fixedQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $fixedRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $fixedRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $fixedReference = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    protected null|FHIRSampledData $fixedSampledData = null;
    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    protected null|FHIRSignature $fixedSignature = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    protected null|FHIRTiming $fixedTiming = null;
    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    protected null|FHIRMeta $fixedMeta = null;
    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    protected null|FHIRBase64Binary $patternBase64Binary = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $patternBoolean = null;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    protected null|FHIRCode $patternCode = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $patternDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $patternDateTime = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $patternDecimal = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    protected null|FHIRId $patternId = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $patternInstant = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $patternInteger = null;
    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $patternMarkdown = null;
    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    protected null|FHIROid $patternOid = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $patternPositiveInt = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $patternString = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $patternTime = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $patternUnsignedInt = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $patternUri = null;
    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    protected null|FHIRAddress $patternAddress = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $patternAge = null;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    protected null|FHIRAnnotation $patternAnnotation = null;
    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    protected null|FHIRAttachment $patternAttachment = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $patternCodeableConcept = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $patternCoding = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    protected null|FHIRContactPoint $patternContactPoint = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    protected null|FHIRCount $patternCount = null;
    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    protected null|FHIRDistance $patternDistance = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected null|FHIRDuration $patternDuration = null;
    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    protected null|FHIRHumanName $patternHumanName = null;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    protected null|FHIRIdentifier $patternIdentifier = null;
    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    protected null|FHIRMoney $patternMoney = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $patternPeriod = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $patternQuantity = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $patternRange = null;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    protected null|FHIRRatio $patternRatio = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patternReference = null;
    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    protected null|FHIRSampledData $patternSampledData = null;
    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    protected null|FHIRSignature $patternSignature = null;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    protected null|FHIRTiming $patternTiming = null;
    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    protected null|FHIRMeta $patternMeta = null;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample[]
     */
    protected null|array $example = [];
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $minValueDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $minValueDateTime = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $minValueInstant = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $minValueTime = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $minValueDecimal = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $minValueInteger = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $minValuePositiveInt = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $minValueUnsignedInt = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $minValueQuantity = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $maxValueDate = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $maxValueDateTime = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $maxValueInstant = null;
    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    protected null|FHIRTime $maxValueTime = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    protected null|FHIRDecimal $maxValueDecimal = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $maxValueInteger = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    protected null|FHIRPositiveInt $maxValuePositiveInt = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $maxValueUnsignedInt = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    protected null|FHIRQuantity $maxValueQuantity = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the maximum length in characters that is permitted to be present in
     * conformant instances and which is expected to be supported by conformant
     * consumers that support the element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $maxLength = null;
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId[]
     */
    protected null|array $condition = [];
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    protected null|array $constraint = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, implementations that produce or consume resources SHALL provide
     * "support" for the element in some meaningful way. If false, the element may be
     * ignored and not supported.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $mustSupport = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, the value of this element affects the interpretation of the element or
     * resource that contains it, and the value of the element cannot be ignored.
     * Typically, this is used for status, negation and qualification codes. The effect
     * of this is that the element cannot be ignored by systems: they SHALL either
     * recognize the element and process it, and/or a pre-determination has been made
     * that it is not relevant to their particular system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $isModifier = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the element should be included if a client requests a search with the
     * parameter _summary=true.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $isSummary = null;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
     * Quantity), or the data types (string, uri).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    protected null|FHIRElementDefinitionBinding $binding = null;
    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    protected null|array $mapping = [];

    /**
     * Validation map for fields in type ElementDefinition
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRElementDefinition Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_PATH, $data) || array_key_exists(self::FIELD_PATH_EXT, $data)) {
            $value = $data[self::FIELD_PATH] ?? null;
            $ext = (isset($data[self::FIELD_PATH_EXT]) && is_array($data[self::FIELD_PATH_EXT])) ? $data[self::FIELD_PATH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPath($value);
                } else if (is_array($value)) {
                    $this->setPath(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPath(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPath(new FHIRString($ext));
            } else {
                $this->setPath(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_REPRESENTATION, $data) || array_key_exists(self::FIELD_REPRESENTATION_EXT, $data)) {
            $value = $data[self::FIELD_REPRESENTATION] ?? null;
            $ext = (isset($data[self::FIELD_REPRESENTATION_EXT]) && is_array($data[self::FIELD_REPRESENTATION_EXT])) ? $data[self::FIELD_REPRESENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPropertyRepresentation) {
                    $this->addRepresentation($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRPropertyRepresentation) {
                            $this->addRepresentation($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addRepresentation(new FHIRPropertyRepresentation(array_merge($v, $iext)));
                            } else {
                                $this->addRepresentation(new FHIRPropertyRepresentation([FHIRPropertyRepresentation::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addRepresentation(new FHIRPropertyRepresentation(array_merge($ext, $value)));
                } else {
                    $this->addRepresentation(new FHIRPropertyRepresentation([FHIRPropertyRepresentation::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addRepresentation(new FHIRPropertyRepresentation($iext));
                }
            } else {
                $this->addRepresentation(new FHIRPropertyRepresentation(null));
            }
        }
        if (array_key_exists(self::FIELD_SLICE_NAME, $data) || array_key_exists(self::FIELD_SLICE_NAME_EXT, $data)) {
            $value = $data[self::FIELD_SLICE_NAME] ?? null;
            $ext = (isset($data[self::FIELD_SLICE_NAME_EXT]) && is_array($data[self::FIELD_SLICE_NAME_EXT])) ? $data[self::FIELD_SLICE_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSliceName($value);
                } else if (is_array($value)) {
                    $this->setSliceName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSliceName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSliceName(new FHIRString($ext));
            } else {
                $this->setSliceName(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_LABEL, $data) || array_key_exists(self::FIELD_LABEL_EXT, $data)) {
            $value = $data[self::FIELD_LABEL] ?? null;
            $ext = (isset($data[self::FIELD_LABEL_EXT]) && is_array($data[self::FIELD_LABEL_EXT])) ? $data[self::FIELD_LABEL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLabel($value);
                } else if (is_array($value)) {
                    $this->setLabel(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLabel(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLabel(new FHIRString($ext));
            } else {
                $this->setLabel(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_SLICING, $data)) {
            if ($data[self::FIELD_SLICING] instanceof FHIRElementDefinitionSlicing) {
                $this->setSlicing($data[self::FIELD_SLICING]);
            } else {
                $this->setSlicing(new FHIRElementDefinitionSlicing($data[self::FIELD_SLICING]));
            }
        }
        if (array_key_exists(self::FIELD_SHORT, $data) || array_key_exists(self::FIELD_SHORT_EXT, $data)) {
            $value = $data[self::FIELD_SHORT] ?? null;
            $ext = (isset($data[self::FIELD_SHORT_EXT]) && is_array($data[self::FIELD_SHORT_EXT])) ? $data[self::FIELD_SHORT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setShort($value);
                } else if (is_array($value)) {
                    $this->setShort(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setShort(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setShort(new FHIRString($ext));
            } else {
                $this->setShort(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFINITION, $data) || array_key_exists(self::FIELD_DEFINITION_EXT, $data)) {
            $value = $data[self::FIELD_DEFINITION] ?? null;
            $ext = (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT])) ? $data[self::FIELD_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDefinition($value);
                } else if (is_array($value)) {
                    $this->setDefinition(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDefinition(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefinition(new FHIRMarkdown($ext));
            } else {
                $this->setDefinition(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_COMMENT, $data) || array_key_exists(self::FIELD_COMMENT_EXT, $data)) {
            $value = $data[self::FIELD_COMMENT] ?? null;
            $ext = (isset($data[self::FIELD_COMMENT_EXT]) && is_array($data[self::FIELD_COMMENT_EXT])) ? $data[self::FIELD_COMMENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setComment($value);
                } else if (is_array($value)) {
                    $this->setComment(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setComment(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setComment(new FHIRMarkdown($ext));
            } else {
                $this->setComment(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_REQUIREMENTS, $data) || array_key_exists(self::FIELD_REQUIREMENTS_EXT, $data)) {
            $value = $data[self::FIELD_REQUIREMENTS] ?? null;
            $ext = (isset($data[self::FIELD_REQUIREMENTS_EXT]) && is_array($data[self::FIELD_REQUIREMENTS_EXT])) ? $data[self::FIELD_REQUIREMENTS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setRequirements($value);
                } else if (is_array($value)) {
                    $this->setRequirements(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setRequirements(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequirements(new FHIRMarkdown($ext));
            } else {
                $this->setRequirements(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_ALIAS, $data) || array_key_exists(self::FIELD_ALIAS_EXT, $data)) {
            $value = $data[self::FIELD_ALIAS] ?? null;
            $ext = (isset($data[self::FIELD_ALIAS_EXT]) && is_array($data[self::FIELD_ALIAS_EXT])) ? $data[self::FIELD_ALIAS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addAlias($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addAlias($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addAlias(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addAlias(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addAlias(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addAlias(new FHIRString($iext));
                }
            } else {
                $this->addAlias(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN, $data) || array_key_exists(self::FIELD_MIN_EXT, $data)) {
            $value = $data[self::FIELD_MIN] ?? null;
            $ext = (isset($data[self::FIELD_MIN_EXT]) && is_array($data[self::FIELD_MIN_EXT])) ? $data[self::FIELD_MIN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setMin($value);
                } else if (is_array($value)) {
                    $this->setMin(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setMin(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMin(new FHIRUnsignedInt($ext));
            } else {
                $this->setMin(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX, $data) || array_key_exists(self::FIELD_MAX_EXT, $data)) {
            $value = $data[self::FIELD_MAX] ?? null;
            $ext = (isset($data[self::FIELD_MAX_EXT]) && is_array($data[self::FIELD_MAX_EXT])) ? $data[self::FIELD_MAX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMax($value);
                } else if (is_array($value)) {
                    $this->setMax(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMax(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMax(new FHIRString($ext));
            } else {
                $this->setMax(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_BASE, $data)) {
            if ($data[self::FIELD_BASE] instanceof FHIRElementDefinitionBase) {
                $this->setBase($data[self::FIELD_BASE]);
            } else {
                $this->setBase(new FHIRElementDefinitionBase($data[self::FIELD_BASE]));
            }
        }
        if (array_key_exists(self::FIELD_CONTENT_REFERENCE, $data) || array_key_exists(self::FIELD_CONTENT_REFERENCE_EXT, $data)) {
            $value = $data[self::FIELD_CONTENT_REFERENCE] ?? null;
            $ext = (isset($data[self::FIELD_CONTENT_REFERENCE_EXT]) && is_array($data[self::FIELD_CONTENT_REFERENCE_EXT])) ? $data[self::FIELD_CONTENT_REFERENCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setContentReference($value);
                } else if (is_array($value)) {
                    $this->setContentReference(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setContentReference(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContentReference(new FHIRUri($ext));
            } else {
                $this->setContentReference(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if (is_array($data[self::FIELD_TYPE])) {
                foreach($data[self::FIELD_TYPE] as $v) {
                    if ($v instanceof FHIRElementDefinitionType) {
                        $this->addType($v);
                    } else {
                        $this->addType(new FHIRElementDefinitionType($v));
                    }
                }
            } elseif ($data[self::FIELD_TYPE] instanceof FHIRElementDefinitionType) {
                $this->addType($data[self::FIELD_TYPE]);
            } else {
                $this->addType(new FHIRElementDefinitionType($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setDefaultValueBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $this->setDefaultValueBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_BOOLEAN, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDefaultValueBoolean($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueBoolean(new FHIRBoolean($ext));
            } else {
                $this->setDefaultValueBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CODE, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_CODE_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_CODE] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_CODE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_CODE_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setDefaultValueCode($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueCode(new FHIRCode($ext));
            } else {
                $this->setDefaultValueCode(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DATE, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DATE_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DATE_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDefaultValueDate($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueDate(new FHIRDate($ext));
            } else {
                $this->setDefaultValueDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_TIME, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDefaultValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueDateTime(new FHIRDateTime($ext));
            } else {
                $this->setDefaultValueDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DECIMAL, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDefaultValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueDecimal(new FHIRDecimal($ext));
            } else {
                $this->setDefaultValueDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_ID, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_ID_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_ID] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_ID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_ID_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setDefaultValueId($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueId(new FHIRId($ext));
            } else {
                $this->setDefaultValueId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_INSTANT, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_INSTANT_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_INSTANT] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setDefaultValueInstant($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueInstant(new FHIRInstant($ext));
            } else {
                $this->setDefaultValueInstant(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_INTEGER, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDefaultValueInteger($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueInteger(new FHIRInteger($ext));
            } else {
                $this->setDefaultValueInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_MARKDOWN, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDefaultValueMarkdown($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueMarkdown(new FHIRMarkdown($ext));
            } else {
                $this->setDefaultValueMarkdown(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_OID, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_OID_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_OID] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_OID_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_OID_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_OID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setDefaultValueOid($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueOid(new FHIROid($ext));
            } else {
                $this->setDefaultValueOid(new FHIROid(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setDefaultValuePositiveInt($value);
                } else if (is_array($value)) {
                    $this->setDefaultValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValuePositiveInt(new FHIRPositiveInt($ext));
            } else {
                $this->setDefaultValuePositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_STRING, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_STRING_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_STRING_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_STRING_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDefaultValueString($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueString(new FHIRString($ext));
            } else {
                $this->setDefaultValueString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_TIME, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_TIME_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_TIME_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setDefaultValueTime($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueTime(new FHIRTime($ext));
            } else {
                $this->setDefaultValueTime(new FHIRTime(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setDefaultValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $this->setDefaultValueUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_URI, $data) || array_key_exists(self::FIELD_DEFAULT_VALUE_URI_EXT, $data)) {
            $value = $data[self::FIELD_DEFAULT_VALUE_URI] ?? null;
            $ext = (isset($data[self::FIELD_DEFAULT_VALUE_URI_EXT]) && is_array($data[self::FIELD_DEFAULT_VALUE_URI_EXT])) ? $data[self::FIELD_DEFAULT_VALUE_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setDefaultValueUri($value);
                } else if (is_array($value)) {
                    $this->setDefaultValueUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setDefaultValueUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefaultValueUri(new FHIRUri($ext));
            } else {
                $this->setDefaultValueUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_ADDRESS, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_ADDRESS] instanceof FHIRAddress) {
                $this->setDefaultValueAddress($data[self::FIELD_DEFAULT_VALUE_ADDRESS]);
            } else {
                $this->setDefaultValueAddress(new FHIRAddress($data[self::FIELD_DEFAULT_VALUE_ADDRESS]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_AGE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_AGE] instanceof FHIRAge) {
                $this->setDefaultValueAge($data[self::FIELD_DEFAULT_VALUE_AGE]);
            } else {
                $this->setDefaultValueAge(new FHIRAge($data[self::FIELD_DEFAULT_VALUE_AGE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_ANNOTATION, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setDefaultValueAnnotation($data[self::FIELD_DEFAULT_VALUE_ANNOTATION]);
            } else {
                $this->setDefaultValueAnnotation(new FHIRAnnotation($data[self::FIELD_DEFAULT_VALUE_ANNOTATION]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_ATTACHMENT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setDefaultValueAttachment($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT]);
            } else {
                $this->setDefaultValueAttachment(new FHIRAttachment($data[self::FIELD_DEFAULT_VALUE_ATTACHMENT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setDefaultValueCodeableConcept($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]);
            } else {
                $this->setDefaultValueCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CODING, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_CODING] instanceof FHIRCoding) {
                $this->setDefaultValueCoding($data[self::FIELD_DEFAULT_VALUE_CODING]);
            } else {
                $this->setDefaultValueCoding(new FHIRCoding($data[self::FIELD_DEFAULT_VALUE_CODING]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_CONTACT_POINT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setDefaultValueContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]);
            } else {
                $this->setDefaultValueContactPoint(new FHIRContactPoint($data[self::FIELD_DEFAULT_VALUE_CONTACT_POINT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_COUNT, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_COUNT] instanceof FHIRCount) {
                $this->setDefaultValueCount($data[self::FIELD_DEFAULT_VALUE_COUNT]);
            } else {
                $this->setDefaultValueCount(new FHIRCount($data[self::FIELD_DEFAULT_VALUE_COUNT]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DISTANCE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_DISTANCE] instanceof FHIRDistance) {
                $this->setDefaultValueDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]);
            } else {
                $this->setDefaultValueDistance(new FHIRDistance($data[self::FIELD_DEFAULT_VALUE_DISTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_DURATION, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_DURATION] instanceof FHIRDuration) {
                $this->setDefaultValueDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]);
            } else {
                $this->setDefaultValueDuration(new FHIRDuration($data[self::FIELD_DEFAULT_VALUE_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_HUMAN_NAME, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setDefaultValueHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]);
            } else {
                $this->setDefaultValueHumanName(new FHIRHumanName($data[self::FIELD_DEFAULT_VALUE_HUMAN_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_IDENTIFIER, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setDefaultValueIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]);
            } else {
                $this->setDefaultValueIdentifier(new FHIRIdentifier($data[self::FIELD_DEFAULT_VALUE_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_MONEY, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_MONEY] instanceof FHIRMoney) {
                $this->setDefaultValueMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]);
            } else {
                $this->setDefaultValueMoney(new FHIRMoney($data[self::FIELD_DEFAULT_VALUE_MONEY]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_PERIOD, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_PERIOD] instanceof FHIRPeriod) {
                $this->setDefaultValuePeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]);
            } else {
                $this->setDefaultValuePeriod(new FHIRPeriod($data[self::FIELD_DEFAULT_VALUE_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_QUANTITY, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setDefaultValueQuantity($data[self::FIELD_DEFAULT_VALUE_QUANTITY]);
            } else {
                $this->setDefaultValueQuantity(new FHIRQuantity($data[self::FIELD_DEFAULT_VALUE_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_RANGE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_RANGE] instanceof FHIRRange) {
                $this->setDefaultValueRange($data[self::FIELD_DEFAULT_VALUE_RANGE]);
            } else {
                $this->setDefaultValueRange(new FHIRRange($data[self::FIELD_DEFAULT_VALUE_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_RATIO, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_RATIO] instanceof FHIRRatio) {
                $this->setDefaultValueRatio($data[self::FIELD_DEFAULT_VALUE_RATIO]);
            } else {
                $this->setDefaultValueRatio(new FHIRRatio($data[self::FIELD_DEFAULT_VALUE_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_REFERENCE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_REFERENCE] instanceof FHIRReference) {
                $this->setDefaultValueReference($data[self::FIELD_DEFAULT_VALUE_REFERENCE]);
            } else {
                $this->setDefaultValueReference(new FHIRReference($data[self::FIELD_DEFAULT_VALUE_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_SAMPLED_DATA, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setDefaultValueSampledData($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]);
            } else {
                $this->setDefaultValueSampledData(new FHIRSampledData($data[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_SIGNATURE, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_SIGNATURE] instanceof FHIRSignature) {
                $this->setDefaultValueSignature($data[self::FIELD_DEFAULT_VALUE_SIGNATURE]);
            } else {
                $this->setDefaultValueSignature(new FHIRSignature($data[self::FIELD_DEFAULT_VALUE_SIGNATURE]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_TIMING, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_TIMING] instanceof FHIRTiming) {
                $this->setDefaultValueTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]);
            } else {
                $this->setDefaultValueTiming(new FHIRTiming($data[self::FIELD_DEFAULT_VALUE_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_DEFAULT_VALUE_META, $data)) {
            if ($data[self::FIELD_DEFAULT_VALUE_META] instanceof FHIRMeta) {
                $this->setDefaultValueMeta($data[self::FIELD_DEFAULT_VALUE_META]);
            } else {
                $this->setDefaultValueMeta(new FHIRMeta($data[self::FIELD_DEFAULT_VALUE_META]));
            }
        }
        if (array_key_exists(self::FIELD_MEANING_WHEN_MISSING, $data) || array_key_exists(self::FIELD_MEANING_WHEN_MISSING_EXT, $data)) {
            $value = $data[self::FIELD_MEANING_WHEN_MISSING] ?? null;
            $ext = (isset($data[self::FIELD_MEANING_WHEN_MISSING_EXT]) && is_array($data[self::FIELD_MEANING_WHEN_MISSING_EXT])) ? $data[self::FIELD_MEANING_WHEN_MISSING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setMeaningWhenMissing($value);
                } else if (is_array($value)) {
                    $this->setMeaningWhenMissing(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setMeaningWhenMissing(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMeaningWhenMissing(new FHIRMarkdown($ext));
            } else {
                $this->setMeaningWhenMissing(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_ORDER_MEANING, $data) || array_key_exists(self::FIELD_ORDER_MEANING_EXT, $data)) {
            $value = $data[self::FIELD_ORDER_MEANING] ?? null;
            $ext = (isset($data[self::FIELD_ORDER_MEANING_EXT]) && is_array($data[self::FIELD_ORDER_MEANING_EXT])) ? $data[self::FIELD_ORDER_MEANING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOrderMeaning($value);
                } else if (is_array($value)) {
                    $this->setOrderMeaning(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOrderMeaning(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOrderMeaning(new FHIRString($ext));
            } else {
                $this->setOrderMeaning(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_BASE_64BINARY, $data) || array_key_exists(self::FIELD_FIXED_BASE_64BINARY_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_BASE_64BINARY] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_FIXED_BASE_64BINARY_EXT])) ? $data[self::FIELD_FIXED_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setFixedBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setFixedBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setFixedBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $this->setFixedBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_BOOLEAN, $data) || array_key_exists(self::FIELD_FIXED_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_BOOLEAN_EXT]) && is_array($data[self::FIELD_FIXED_BOOLEAN_EXT])) ? $data[self::FIELD_FIXED_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setFixedBoolean($value);
                } else if (is_array($value)) {
                    $this->setFixedBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setFixedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedBoolean(new FHIRBoolean($ext));
            } else {
                $this->setFixedBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_CODE, $data) || array_key_exists(self::FIELD_FIXED_CODE_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_CODE] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_CODE_EXT]) && is_array($data[self::FIELD_FIXED_CODE_EXT])) ? $data[self::FIELD_FIXED_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setFixedCode($value);
                } else if (is_array($value)) {
                    $this->setFixedCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setFixedCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedCode(new FHIRCode($ext));
            } else {
                $this->setFixedCode(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_DATE, $data) || array_key_exists(self::FIELD_FIXED_DATE_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_DATE] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_DATE_EXT]) && is_array($data[self::FIELD_FIXED_DATE_EXT])) ? $data[self::FIELD_FIXED_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setFixedDate($value);
                } else if (is_array($value)) {
                    $this->setFixedDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setFixedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedDate(new FHIRDate($ext));
            } else {
                $this->setFixedDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_DATE_TIME, $data) || array_key_exists(self::FIELD_FIXED_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_DATE_TIME_EXT]) && is_array($data[self::FIELD_FIXED_DATE_TIME_EXT])) ? $data[self::FIELD_FIXED_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setFixedDateTime($value);
                } else if (is_array($value)) {
                    $this->setFixedDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setFixedDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedDateTime(new FHIRDateTime($ext));
            } else {
                $this->setFixedDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_DECIMAL, $data) || array_key_exists(self::FIELD_FIXED_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_DECIMAL_EXT]) && is_array($data[self::FIELD_FIXED_DECIMAL_EXT])) ? $data[self::FIELD_FIXED_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setFixedDecimal($value);
                } else if (is_array($value)) {
                    $this->setFixedDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setFixedDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedDecimal(new FHIRDecimal($ext));
            } else {
                $this->setFixedDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_ID, $data) || array_key_exists(self::FIELD_FIXED_ID_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_ID] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_ID_EXT]) && is_array($data[self::FIELD_FIXED_ID_EXT])) ? $data[self::FIELD_FIXED_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setFixedId($value);
                } else if (is_array($value)) {
                    $this->setFixedId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setFixedId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedId(new FHIRId($ext));
            } else {
                $this->setFixedId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_INSTANT, $data) || array_key_exists(self::FIELD_FIXED_INSTANT_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_INSTANT] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_INSTANT_EXT]) && is_array($data[self::FIELD_FIXED_INSTANT_EXT])) ? $data[self::FIELD_FIXED_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setFixedInstant($value);
                } else if (is_array($value)) {
                    $this->setFixedInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setFixedInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedInstant(new FHIRInstant($ext));
            } else {
                $this->setFixedInstant(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_INTEGER, $data) || array_key_exists(self::FIELD_FIXED_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_INTEGER_EXT]) && is_array($data[self::FIELD_FIXED_INTEGER_EXT])) ? $data[self::FIELD_FIXED_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setFixedInteger($value);
                } else if (is_array($value)) {
                    $this->setFixedInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setFixedInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedInteger(new FHIRInteger($ext));
            } else {
                $this->setFixedInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_MARKDOWN, $data) || array_key_exists(self::FIELD_FIXED_MARKDOWN_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_MARKDOWN] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_MARKDOWN_EXT]) && is_array($data[self::FIELD_FIXED_MARKDOWN_EXT])) ? $data[self::FIELD_FIXED_MARKDOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setFixedMarkdown($value);
                } else if (is_array($value)) {
                    $this->setFixedMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setFixedMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedMarkdown(new FHIRMarkdown($ext));
            } else {
                $this->setFixedMarkdown(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_OID, $data) || array_key_exists(self::FIELD_FIXED_OID_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_OID] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_OID_EXT]) && is_array($data[self::FIELD_FIXED_OID_EXT])) ? $data[self::FIELD_FIXED_OID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setFixedOid($value);
                } else if (is_array($value)) {
                    $this->setFixedOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setFixedOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedOid(new FHIROid($ext));
            } else {
                $this->setFixedOid(new FHIROid(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_POSITIVE_INT, $data) || array_key_exists(self::FIELD_FIXED_POSITIVE_INT_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_FIXED_POSITIVE_INT_EXT])) ? $data[self::FIELD_FIXED_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setFixedPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setFixedPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setFixedPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedPositiveInt(new FHIRPositiveInt($ext));
            } else {
                $this->setFixedPositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_STRING, $data) || array_key_exists(self::FIELD_FIXED_STRING_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_STRING] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_STRING_EXT]) && is_array($data[self::FIELD_FIXED_STRING_EXT])) ? $data[self::FIELD_FIXED_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFixedString($value);
                } else if (is_array($value)) {
                    $this->setFixedString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFixedString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedString(new FHIRString($ext));
            } else {
                $this->setFixedString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_TIME, $data) || array_key_exists(self::FIELD_FIXED_TIME_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_TIME] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_TIME_EXT]) && is_array($data[self::FIELD_FIXED_TIME_EXT])) ? $data[self::FIELD_FIXED_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setFixedTime($value);
                } else if (is_array($value)) {
                    $this->setFixedTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setFixedTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedTime(new FHIRTime($ext));
            } else {
                $this->setFixedTime(new FHIRTime(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_UNSIGNED_INT, $data) || array_key_exists(self::FIELD_FIXED_UNSIGNED_INT_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_UNSIGNED_INT] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_FIXED_UNSIGNED_INT_EXT])) ? $data[self::FIELD_FIXED_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setFixedUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setFixedUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setFixedUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $this->setFixedUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_URI, $data) || array_key_exists(self::FIELD_FIXED_URI_EXT, $data)) {
            $value = $data[self::FIELD_FIXED_URI] ?? null;
            $ext = (isset($data[self::FIELD_FIXED_URI_EXT]) && is_array($data[self::FIELD_FIXED_URI_EXT])) ? $data[self::FIELD_FIXED_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setFixedUri($value);
                } else if (is_array($value)) {
                    $this->setFixedUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setFixedUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFixedUri(new FHIRUri($ext));
            } else {
                $this->setFixedUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_ADDRESS, $data)) {
            if ($data[self::FIELD_FIXED_ADDRESS] instanceof FHIRAddress) {
                $this->setFixedAddress($data[self::FIELD_FIXED_ADDRESS]);
            } else {
                $this->setFixedAddress(new FHIRAddress($data[self::FIELD_FIXED_ADDRESS]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_AGE, $data)) {
            if ($data[self::FIELD_FIXED_AGE] instanceof FHIRAge) {
                $this->setFixedAge($data[self::FIELD_FIXED_AGE]);
            } else {
                $this->setFixedAge(new FHIRAge($data[self::FIELD_FIXED_AGE]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_ANNOTATION, $data)) {
            if ($data[self::FIELD_FIXED_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setFixedAnnotation($data[self::FIELD_FIXED_ANNOTATION]);
            } else {
                $this->setFixedAnnotation(new FHIRAnnotation($data[self::FIELD_FIXED_ANNOTATION]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_ATTACHMENT, $data)) {
            if ($data[self::FIELD_FIXED_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setFixedAttachment($data[self::FIELD_FIXED_ATTACHMENT]);
            } else {
                $this->setFixedAttachment(new FHIRAttachment($data[self::FIELD_FIXED_ATTACHMENT]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_FIXED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setFixedCodeableConcept($data[self::FIELD_FIXED_CODEABLE_CONCEPT]);
            } else {
                $this->setFixedCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_FIXED_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_CODING, $data)) {
            if ($data[self::FIELD_FIXED_CODING] instanceof FHIRCoding) {
                $this->setFixedCoding($data[self::FIELD_FIXED_CODING]);
            } else {
                $this->setFixedCoding(new FHIRCoding($data[self::FIELD_FIXED_CODING]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_CONTACT_POINT, $data)) {
            if ($data[self::FIELD_FIXED_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setFixedContactPoint($data[self::FIELD_FIXED_CONTACT_POINT]);
            } else {
                $this->setFixedContactPoint(new FHIRContactPoint($data[self::FIELD_FIXED_CONTACT_POINT]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_COUNT, $data)) {
            if ($data[self::FIELD_FIXED_COUNT] instanceof FHIRCount) {
                $this->setFixedCount($data[self::FIELD_FIXED_COUNT]);
            } else {
                $this->setFixedCount(new FHIRCount($data[self::FIELD_FIXED_COUNT]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_DISTANCE, $data)) {
            if ($data[self::FIELD_FIXED_DISTANCE] instanceof FHIRDistance) {
                $this->setFixedDistance($data[self::FIELD_FIXED_DISTANCE]);
            } else {
                $this->setFixedDistance(new FHIRDistance($data[self::FIELD_FIXED_DISTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_DURATION, $data)) {
            if ($data[self::FIELD_FIXED_DURATION] instanceof FHIRDuration) {
                $this->setFixedDuration($data[self::FIELD_FIXED_DURATION]);
            } else {
                $this->setFixedDuration(new FHIRDuration($data[self::FIELD_FIXED_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_HUMAN_NAME, $data)) {
            if ($data[self::FIELD_FIXED_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setFixedHumanName($data[self::FIELD_FIXED_HUMAN_NAME]);
            } else {
                $this->setFixedHumanName(new FHIRHumanName($data[self::FIELD_FIXED_HUMAN_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_IDENTIFIER, $data)) {
            if ($data[self::FIELD_FIXED_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setFixedIdentifier($data[self::FIELD_FIXED_IDENTIFIER]);
            } else {
                $this->setFixedIdentifier(new FHIRIdentifier($data[self::FIELD_FIXED_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_MONEY, $data)) {
            if ($data[self::FIELD_FIXED_MONEY] instanceof FHIRMoney) {
                $this->setFixedMoney($data[self::FIELD_FIXED_MONEY]);
            } else {
                $this->setFixedMoney(new FHIRMoney($data[self::FIELD_FIXED_MONEY]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_PERIOD, $data)) {
            if ($data[self::FIELD_FIXED_PERIOD] instanceof FHIRPeriod) {
                $this->setFixedPeriod($data[self::FIELD_FIXED_PERIOD]);
            } else {
                $this->setFixedPeriod(new FHIRPeriod($data[self::FIELD_FIXED_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_QUANTITY, $data)) {
            if ($data[self::FIELD_FIXED_QUANTITY] instanceof FHIRQuantity) {
                $this->setFixedQuantity($data[self::FIELD_FIXED_QUANTITY]);
            } else {
                $this->setFixedQuantity(new FHIRQuantity($data[self::FIELD_FIXED_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_RANGE, $data)) {
            if ($data[self::FIELD_FIXED_RANGE] instanceof FHIRRange) {
                $this->setFixedRange($data[self::FIELD_FIXED_RANGE]);
            } else {
                $this->setFixedRange(new FHIRRange($data[self::FIELD_FIXED_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_RATIO, $data)) {
            if ($data[self::FIELD_FIXED_RATIO] instanceof FHIRRatio) {
                $this->setFixedRatio($data[self::FIELD_FIXED_RATIO]);
            } else {
                $this->setFixedRatio(new FHIRRatio($data[self::FIELD_FIXED_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_REFERENCE, $data)) {
            if ($data[self::FIELD_FIXED_REFERENCE] instanceof FHIRReference) {
                $this->setFixedReference($data[self::FIELD_FIXED_REFERENCE]);
            } else {
                $this->setFixedReference(new FHIRReference($data[self::FIELD_FIXED_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_SAMPLED_DATA, $data)) {
            if ($data[self::FIELD_FIXED_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setFixedSampledData($data[self::FIELD_FIXED_SAMPLED_DATA]);
            } else {
                $this->setFixedSampledData(new FHIRSampledData($data[self::FIELD_FIXED_SAMPLED_DATA]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_SIGNATURE, $data)) {
            if ($data[self::FIELD_FIXED_SIGNATURE] instanceof FHIRSignature) {
                $this->setFixedSignature($data[self::FIELD_FIXED_SIGNATURE]);
            } else {
                $this->setFixedSignature(new FHIRSignature($data[self::FIELD_FIXED_SIGNATURE]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_TIMING, $data)) {
            if ($data[self::FIELD_FIXED_TIMING] instanceof FHIRTiming) {
                $this->setFixedTiming($data[self::FIELD_FIXED_TIMING]);
            } else {
                $this->setFixedTiming(new FHIRTiming($data[self::FIELD_FIXED_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_FIXED_META, $data)) {
            if ($data[self::FIELD_FIXED_META] instanceof FHIRMeta) {
                $this->setFixedMeta($data[self::FIELD_FIXED_META]);
            } else {
                $this->setFixedMeta(new FHIRMeta($data[self::FIELD_FIXED_META]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_BASE_64BINARY, $data) || array_key_exists(self::FIELD_PATTERN_BASE_64BINARY_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_BASE_64BINARY] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_BASE_64BINARY_EXT]) && is_array($data[self::FIELD_PATTERN_BASE_64BINARY_EXT])) ? $data[self::FIELD_PATTERN_BASE_64BINARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBase64Binary) {
                    $this->setPatternBase64Binary($value);
                } else if (is_array($value)) {
                    $this->setPatternBase64Binary(new FHIRBase64Binary(array_merge($ext, $value)));
                } else {
                    $this->setPatternBase64Binary(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternBase64Binary(new FHIRBase64Binary($ext));
            } else {
                $this->setPatternBase64Binary(new FHIRBase64Binary(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_BOOLEAN, $data) || array_key_exists(self::FIELD_PATTERN_BOOLEAN_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_BOOLEAN_EXT]) && is_array($data[self::FIELD_PATTERN_BOOLEAN_EXT])) ? $data[self::FIELD_PATTERN_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setPatternBoolean($value);
                } else if (is_array($value)) {
                    $this->setPatternBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setPatternBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternBoolean(new FHIRBoolean($ext));
            } else {
                $this->setPatternBoolean(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_CODE, $data) || array_key_exists(self::FIELD_PATTERN_CODE_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_CODE] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_CODE_EXT]) && is_array($data[self::FIELD_PATTERN_CODE_EXT])) ? $data[self::FIELD_PATTERN_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $this->setPatternCode($value);
                } else if (is_array($value)) {
                    $this->setPatternCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $this->setPatternCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternCode(new FHIRCode($ext));
            } else {
                $this->setPatternCode(new FHIRCode(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_DATE, $data) || array_key_exists(self::FIELD_PATTERN_DATE_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_DATE] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_DATE_EXT]) && is_array($data[self::FIELD_PATTERN_DATE_EXT])) ? $data[self::FIELD_PATTERN_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setPatternDate($value);
                } else if (is_array($value)) {
                    $this->setPatternDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setPatternDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternDate(new FHIRDate($ext));
            } else {
                $this->setPatternDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_DATE_TIME, $data) || array_key_exists(self::FIELD_PATTERN_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_DATE_TIME_EXT]) && is_array($data[self::FIELD_PATTERN_DATE_TIME_EXT])) ? $data[self::FIELD_PATTERN_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setPatternDateTime($value);
                } else if (is_array($value)) {
                    $this->setPatternDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setPatternDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternDateTime(new FHIRDateTime($ext));
            } else {
                $this->setPatternDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_DECIMAL, $data) || array_key_exists(self::FIELD_PATTERN_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_DECIMAL_EXT]) && is_array($data[self::FIELD_PATTERN_DECIMAL_EXT])) ? $data[self::FIELD_PATTERN_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPatternDecimal($value);
                } else if (is_array($value)) {
                    $this->setPatternDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPatternDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternDecimal(new FHIRDecimal($ext));
            } else {
                $this->setPatternDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_ID, $data) || array_key_exists(self::FIELD_PATTERN_ID_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_ID] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_ID_EXT]) && is_array($data[self::FIELD_PATTERN_ID_EXT])) ? $data[self::FIELD_PATTERN_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setPatternId($value);
                } else if (is_array($value)) {
                    $this->setPatternId(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setPatternId(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternId(new FHIRId($ext));
            } else {
                $this->setPatternId(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_INSTANT, $data) || array_key_exists(self::FIELD_PATTERN_INSTANT_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_INSTANT] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_INSTANT_EXT]) && is_array($data[self::FIELD_PATTERN_INSTANT_EXT])) ? $data[self::FIELD_PATTERN_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setPatternInstant($value);
                } else if (is_array($value)) {
                    $this->setPatternInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setPatternInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternInstant(new FHIRInstant($ext));
            } else {
                $this->setPatternInstant(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_INTEGER, $data) || array_key_exists(self::FIELD_PATTERN_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_INTEGER_EXT]) && is_array($data[self::FIELD_PATTERN_INTEGER_EXT])) ? $data[self::FIELD_PATTERN_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setPatternInteger($value);
                } else if (is_array($value)) {
                    $this->setPatternInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setPatternInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternInteger(new FHIRInteger($ext));
            } else {
                $this->setPatternInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_MARKDOWN, $data) || array_key_exists(self::FIELD_PATTERN_MARKDOWN_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_MARKDOWN] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_MARKDOWN_EXT]) && is_array($data[self::FIELD_PATTERN_MARKDOWN_EXT])) ? $data[self::FIELD_PATTERN_MARKDOWN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPatternMarkdown($value);
                } else if (is_array($value)) {
                    $this->setPatternMarkdown(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPatternMarkdown(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternMarkdown(new FHIRMarkdown($ext));
            } else {
                $this->setPatternMarkdown(new FHIRMarkdown(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_OID, $data) || array_key_exists(self::FIELD_PATTERN_OID_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_OID] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_OID_EXT]) && is_array($data[self::FIELD_PATTERN_OID_EXT])) ? $data[self::FIELD_PATTERN_OID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIROid) {
                    $this->setPatternOid($value);
                } else if (is_array($value)) {
                    $this->setPatternOid(new FHIROid(array_merge($ext, $value)));
                } else {
                    $this->setPatternOid(new FHIROid([FHIROid::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternOid(new FHIROid($ext));
            } else {
                $this->setPatternOid(new FHIROid(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_POSITIVE_INT, $data) || array_key_exists(self::FIELD_PATTERN_POSITIVE_INT_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_PATTERN_POSITIVE_INT_EXT])) ? $data[self::FIELD_PATTERN_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setPatternPositiveInt($value);
                } else if (is_array($value)) {
                    $this->setPatternPositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setPatternPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternPositiveInt(new FHIRPositiveInt($ext));
            } else {
                $this->setPatternPositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_STRING, $data) || array_key_exists(self::FIELD_PATTERN_STRING_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_STRING] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_STRING_EXT]) && is_array($data[self::FIELD_PATTERN_STRING_EXT])) ? $data[self::FIELD_PATTERN_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPatternString($value);
                } else if (is_array($value)) {
                    $this->setPatternString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPatternString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternString(new FHIRString($ext));
            } else {
                $this->setPatternString(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_TIME, $data) || array_key_exists(self::FIELD_PATTERN_TIME_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_TIME] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_TIME_EXT]) && is_array($data[self::FIELD_PATTERN_TIME_EXT])) ? $data[self::FIELD_PATTERN_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setPatternTime($value);
                } else if (is_array($value)) {
                    $this->setPatternTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setPatternTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternTime(new FHIRTime($ext));
            } else {
                $this->setPatternTime(new FHIRTime(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_UNSIGNED_INT, $data) || array_key_exists(self::FIELD_PATTERN_UNSIGNED_INT_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_UNSIGNED_INT] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_PATTERN_UNSIGNED_INT_EXT])) ? $data[self::FIELD_PATTERN_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setPatternUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setPatternUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setPatternUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $this->setPatternUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_URI, $data) || array_key_exists(self::FIELD_PATTERN_URI_EXT, $data)) {
            $value = $data[self::FIELD_PATTERN_URI] ?? null;
            $ext = (isset($data[self::FIELD_PATTERN_URI_EXT]) && is_array($data[self::FIELD_PATTERN_URI_EXT])) ? $data[self::FIELD_PATTERN_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setPatternUri($value);
                } else if (is_array($value)) {
                    $this->setPatternUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setPatternUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPatternUri(new FHIRUri($ext));
            } else {
                $this->setPatternUri(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_ADDRESS, $data)) {
            if ($data[self::FIELD_PATTERN_ADDRESS] instanceof FHIRAddress) {
                $this->setPatternAddress($data[self::FIELD_PATTERN_ADDRESS]);
            } else {
                $this->setPatternAddress(new FHIRAddress($data[self::FIELD_PATTERN_ADDRESS]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_AGE, $data)) {
            if ($data[self::FIELD_PATTERN_AGE] instanceof FHIRAge) {
                $this->setPatternAge($data[self::FIELD_PATTERN_AGE]);
            } else {
                $this->setPatternAge(new FHIRAge($data[self::FIELD_PATTERN_AGE]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_ANNOTATION, $data)) {
            if ($data[self::FIELD_PATTERN_ANNOTATION] instanceof FHIRAnnotation) {
                $this->setPatternAnnotation($data[self::FIELD_PATTERN_ANNOTATION]);
            } else {
                $this->setPatternAnnotation(new FHIRAnnotation($data[self::FIELD_PATTERN_ANNOTATION]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_ATTACHMENT, $data)) {
            if ($data[self::FIELD_PATTERN_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setPatternAttachment($data[self::FIELD_PATTERN_ATTACHMENT]);
            } else {
                $this->setPatternAttachment(new FHIRAttachment($data[self::FIELD_PATTERN_ATTACHMENT]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_CODEABLE_CONCEPT, $data)) {
            if ($data[self::FIELD_PATTERN_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setPatternCodeableConcept($data[self::FIELD_PATTERN_CODEABLE_CONCEPT]);
            } else {
                $this->setPatternCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_PATTERN_CODEABLE_CONCEPT]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_CODING, $data)) {
            if ($data[self::FIELD_PATTERN_CODING] instanceof FHIRCoding) {
                $this->setPatternCoding($data[self::FIELD_PATTERN_CODING]);
            } else {
                $this->setPatternCoding(new FHIRCoding($data[self::FIELD_PATTERN_CODING]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_CONTACT_POINT, $data)) {
            if ($data[self::FIELD_PATTERN_CONTACT_POINT] instanceof FHIRContactPoint) {
                $this->setPatternContactPoint($data[self::FIELD_PATTERN_CONTACT_POINT]);
            } else {
                $this->setPatternContactPoint(new FHIRContactPoint($data[self::FIELD_PATTERN_CONTACT_POINT]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_COUNT, $data)) {
            if ($data[self::FIELD_PATTERN_COUNT] instanceof FHIRCount) {
                $this->setPatternCount($data[self::FIELD_PATTERN_COUNT]);
            } else {
                $this->setPatternCount(new FHIRCount($data[self::FIELD_PATTERN_COUNT]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_DISTANCE, $data)) {
            if ($data[self::FIELD_PATTERN_DISTANCE] instanceof FHIRDistance) {
                $this->setPatternDistance($data[self::FIELD_PATTERN_DISTANCE]);
            } else {
                $this->setPatternDistance(new FHIRDistance($data[self::FIELD_PATTERN_DISTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_DURATION, $data)) {
            if ($data[self::FIELD_PATTERN_DURATION] instanceof FHIRDuration) {
                $this->setPatternDuration($data[self::FIELD_PATTERN_DURATION]);
            } else {
                $this->setPatternDuration(new FHIRDuration($data[self::FIELD_PATTERN_DURATION]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_HUMAN_NAME, $data)) {
            if ($data[self::FIELD_PATTERN_HUMAN_NAME] instanceof FHIRHumanName) {
                $this->setPatternHumanName($data[self::FIELD_PATTERN_HUMAN_NAME]);
            } else {
                $this->setPatternHumanName(new FHIRHumanName($data[self::FIELD_PATTERN_HUMAN_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_IDENTIFIER, $data)) {
            if ($data[self::FIELD_PATTERN_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setPatternIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]);
            } else {
                $this->setPatternIdentifier(new FHIRIdentifier($data[self::FIELD_PATTERN_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_MONEY, $data)) {
            if ($data[self::FIELD_PATTERN_MONEY] instanceof FHIRMoney) {
                $this->setPatternMoney($data[self::FIELD_PATTERN_MONEY]);
            } else {
                $this->setPatternMoney(new FHIRMoney($data[self::FIELD_PATTERN_MONEY]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_PERIOD, $data)) {
            if ($data[self::FIELD_PATTERN_PERIOD] instanceof FHIRPeriod) {
                $this->setPatternPeriod($data[self::FIELD_PATTERN_PERIOD]);
            } else {
                $this->setPatternPeriod(new FHIRPeriod($data[self::FIELD_PATTERN_PERIOD]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_QUANTITY, $data)) {
            if ($data[self::FIELD_PATTERN_QUANTITY] instanceof FHIRQuantity) {
                $this->setPatternQuantity($data[self::FIELD_PATTERN_QUANTITY]);
            } else {
                $this->setPatternQuantity(new FHIRQuantity($data[self::FIELD_PATTERN_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_RANGE, $data)) {
            if ($data[self::FIELD_PATTERN_RANGE] instanceof FHIRRange) {
                $this->setPatternRange($data[self::FIELD_PATTERN_RANGE]);
            } else {
                $this->setPatternRange(new FHIRRange($data[self::FIELD_PATTERN_RANGE]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_RATIO, $data)) {
            if ($data[self::FIELD_PATTERN_RATIO] instanceof FHIRRatio) {
                $this->setPatternRatio($data[self::FIELD_PATTERN_RATIO]);
            } else {
                $this->setPatternRatio(new FHIRRatio($data[self::FIELD_PATTERN_RATIO]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_REFERENCE, $data)) {
            if ($data[self::FIELD_PATTERN_REFERENCE] instanceof FHIRReference) {
                $this->setPatternReference($data[self::FIELD_PATTERN_REFERENCE]);
            } else {
                $this->setPatternReference(new FHIRReference($data[self::FIELD_PATTERN_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_SAMPLED_DATA, $data)) {
            if ($data[self::FIELD_PATTERN_SAMPLED_DATA] instanceof FHIRSampledData) {
                $this->setPatternSampledData($data[self::FIELD_PATTERN_SAMPLED_DATA]);
            } else {
                $this->setPatternSampledData(new FHIRSampledData($data[self::FIELD_PATTERN_SAMPLED_DATA]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_SIGNATURE, $data)) {
            if ($data[self::FIELD_PATTERN_SIGNATURE] instanceof FHIRSignature) {
                $this->setPatternSignature($data[self::FIELD_PATTERN_SIGNATURE]);
            } else {
                $this->setPatternSignature(new FHIRSignature($data[self::FIELD_PATTERN_SIGNATURE]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_TIMING, $data)) {
            if ($data[self::FIELD_PATTERN_TIMING] instanceof FHIRTiming) {
                $this->setPatternTiming($data[self::FIELD_PATTERN_TIMING]);
            } else {
                $this->setPatternTiming(new FHIRTiming($data[self::FIELD_PATTERN_TIMING]));
            }
        }
        if (array_key_exists(self::FIELD_PATTERN_META, $data)) {
            if ($data[self::FIELD_PATTERN_META] instanceof FHIRMeta) {
                $this->setPatternMeta($data[self::FIELD_PATTERN_META]);
            } else {
                $this->setPatternMeta(new FHIRMeta($data[self::FIELD_PATTERN_META]));
            }
        }
        if (array_key_exists(self::FIELD_EXAMPLE, $data)) {
            if (is_array($data[self::FIELD_EXAMPLE])) {
                foreach($data[self::FIELD_EXAMPLE] as $v) {
                    if ($v instanceof FHIRElementDefinitionExample) {
                        $this->addExample($v);
                    } else {
                        $this->addExample(new FHIRElementDefinitionExample($v));
                    }
                }
            } elseif ($data[self::FIELD_EXAMPLE] instanceof FHIRElementDefinitionExample) {
                $this->addExample($data[self::FIELD_EXAMPLE]);
            } else {
                $this->addExample(new FHIRElementDefinitionExample($data[self::FIELD_EXAMPLE]));
            }
        }
        if (array_key_exists(self::FIELD_MIN_VALUE_DATE, $data) || array_key_exists(self::FIELD_MIN_VALUE_DATE_EXT, $data)) {
            $value = $data[self::FIELD_MIN_VALUE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_MIN_VALUE_DATE_EXT]) && is_array($data[self::FIELD_MIN_VALUE_DATE_EXT])) ? $data[self::FIELD_MIN_VALUE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setMinValueDate($value);
                } else if (is_array($value)) {
                    $this->setMinValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setMinValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinValueDate(new FHIRDate($ext));
            } else {
                $this->setMinValueDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN_VALUE_DATE_TIME, $data) || array_key_exists(self::FIELD_MIN_VALUE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_MIN_VALUE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_MIN_VALUE_DATE_TIME_EXT])) ? $data[self::FIELD_MIN_VALUE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setMinValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setMinValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setMinValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinValueDateTime(new FHIRDateTime($ext));
            } else {
                $this->setMinValueDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN_VALUE_INSTANT, $data) || array_key_exists(self::FIELD_MIN_VALUE_INSTANT_EXT, $data)) {
            $value = $data[self::FIELD_MIN_VALUE_INSTANT] ?? null;
            $ext = (isset($data[self::FIELD_MIN_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_MIN_VALUE_INSTANT_EXT])) ? $data[self::FIELD_MIN_VALUE_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setMinValueInstant($value);
                } else if (is_array($value)) {
                    $this->setMinValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setMinValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinValueInstant(new FHIRInstant($ext));
            } else {
                $this->setMinValueInstant(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN_VALUE_TIME, $data) || array_key_exists(self::FIELD_MIN_VALUE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_MIN_VALUE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_MIN_VALUE_TIME_EXT]) && is_array($data[self::FIELD_MIN_VALUE_TIME_EXT])) ? $data[self::FIELD_MIN_VALUE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setMinValueTime($value);
                } else if (is_array($value)) {
                    $this->setMinValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setMinValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinValueTime(new FHIRTime($ext));
            } else {
                $this->setMinValueTime(new FHIRTime(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN_VALUE_DECIMAL, $data) || array_key_exists(self::FIELD_MIN_VALUE_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_MIN_VALUE_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_MIN_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_MIN_VALUE_DECIMAL_EXT])) ? $data[self::FIELD_MIN_VALUE_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setMinValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setMinValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setMinValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinValueDecimal(new FHIRDecimal($ext));
            } else {
                $this->setMinValueDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN_VALUE_INTEGER, $data) || array_key_exists(self::FIELD_MIN_VALUE_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_MIN_VALUE_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_MIN_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_MIN_VALUE_INTEGER_EXT])) ? $data[self::FIELD_MIN_VALUE_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMinValueInteger($value);
                } else if (is_array($value)) {
                    $this->setMinValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMinValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinValueInteger(new FHIRInteger($ext));
            } else {
                $this->setMinValueInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN_VALUE_POSITIVE_INT, $data) || array_key_exists(self::FIELD_MIN_VALUE_POSITIVE_INT_EXT, $data)) {
            $value = $data[self::FIELD_MIN_VALUE_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT])) ? $data[self::FIELD_MIN_VALUE_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMinValuePositiveInt($value);
                } else if (is_array($value)) {
                    $this->setMinValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMinValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinValuePositiveInt(new FHIRPositiveInt($ext));
            } else {
                $this->setMinValuePositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN_VALUE_UNSIGNED_INT, $data) || array_key_exists(self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT, $data)) {
            $value = $data[self::FIELD_MIN_VALUE_UNSIGNED_INT] ?? null;
            $ext = (isset($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT])) ? $data[self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setMinValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setMinValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setMinValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMinValueUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $this->setMinValueUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_MIN_VALUE_QUANTITY, $data)) {
            if ($data[self::FIELD_MIN_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setMinValueQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]);
            } else {
                $this->setMinValueQuantity(new FHIRQuantity($data[self::FIELD_MIN_VALUE_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VALUE_DATE, $data) || array_key_exists(self::FIELD_MAX_VALUE_DATE_EXT, $data)) {
            $value = $data[self::FIELD_MAX_VALUE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_MAX_VALUE_DATE_EXT]) && is_array($data[self::FIELD_MAX_VALUE_DATE_EXT])) ? $data[self::FIELD_MAX_VALUE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setMaxValueDate($value);
                } else if (is_array($value)) {
                    $this->setMaxValueDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxValueDate(new FHIRDate($ext));
            } else {
                $this->setMaxValueDate(new FHIRDate(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VALUE_DATE_TIME, $data) || array_key_exists(self::FIELD_MAX_VALUE_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_MAX_VALUE_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT]) && is_array($data[self::FIELD_MAX_VALUE_DATE_TIME_EXT])) ? $data[self::FIELD_MAX_VALUE_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setMaxValueDateTime($value);
                } else if (is_array($value)) {
                    $this->setMaxValueDateTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueDateTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxValueDateTime(new FHIRDateTime($ext));
            } else {
                $this->setMaxValueDateTime(new FHIRDateTime(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VALUE_INSTANT, $data) || array_key_exists(self::FIELD_MAX_VALUE_INSTANT_EXT, $data)) {
            $value = $data[self::FIELD_MAX_VALUE_INSTANT] ?? null;
            $ext = (isset($data[self::FIELD_MAX_VALUE_INSTANT_EXT]) && is_array($data[self::FIELD_MAX_VALUE_INSTANT_EXT])) ? $data[self::FIELD_MAX_VALUE_INSTANT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setMaxValueInstant($value);
                } else if (is_array($value)) {
                    $this->setMaxValueInstant(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueInstant(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxValueInstant(new FHIRInstant($ext));
            } else {
                $this->setMaxValueInstant(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VALUE_TIME, $data) || array_key_exists(self::FIELD_MAX_VALUE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_MAX_VALUE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_MAX_VALUE_TIME_EXT]) && is_array($data[self::FIELD_MAX_VALUE_TIME_EXT])) ? $data[self::FIELD_MAX_VALUE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRTime) {
                    $this->setMaxValueTime($value);
                } else if (is_array($value)) {
                    $this->setMaxValueTime(new FHIRTime(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueTime(new FHIRTime([FHIRTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxValueTime(new FHIRTime($ext));
            } else {
                $this->setMaxValueTime(new FHIRTime(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VALUE_DECIMAL, $data) || array_key_exists(self::FIELD_MAX_VALUE_DECIMAL_EXT, $data)) {
            $value = $data[self::FIELD_MAX_VALUE_DECIMAL] ?? null;
            $ext = (isset($data[self::FIELD_MAX_VALUE_DECIMAL_EXT]) && is_array($data[self::FIELD_MAX_VALUE_DECIMAL_EXT])) ? $data[self::FIELD_MAX_VALUE_DECIMAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setMaxValueDecimal($value);
                } else if (is_array($value)) {
                    $this->setMaxValueDecimal(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueDecimal(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxValueDecimal(new FHIRDecimal($ext));
            } else {
                $this->setMaxValueDecimal(new FHIRDecimal(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VALUE_INTEGER, $data) || array_key_exists(self::FIELD_MAX_VALUE_INTEGER_EXT, $data)) {
            $value = $data[self::FIELD_MAX_VALUE_INTEGER] ?? null;
            $ext = (isset($data[self::FIELD_MAX_VALUE_INTEGER_EXT]) && is_array($data[self::FIELD_MAX_VALUE_INTEGER_EXT])) ? $data[self::FIELD_MAX_VALUE_INTEGER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMaxValueInteger($value);
                } else if (is_array($value)) {
                    $this->setMaxValueInteger(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueInteger(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxValueInteger(new FHIRInteger($ext));
            } else {
                $this->setMaxValueInteger(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VALUE_POSITIVE_INT, $data) || array_key_exists(self::FIELD_MAX_VALUE_POSITIVE_INT_EXT, $data)) {
            $value = $data[self::FIELD_MAX_VALUE_POSITIVE_INT] ?? null;
            $ext = (isset($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT])) ? $data[self::FIELD_MAX_VALUE_POSITIVE_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setMaxValuePositiveInt($value);
                } else if (is_array($value)) {
                    $this->setMaxValuePositiveInt(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setMaxValuePositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxValuePositiveInt(new FHIRPositiveInt($ext));
            } else {
                $this->setMaxValuePositiveInt(new FHIRPositiveInt(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VALUE_UNSIGNED_INT, $data) || array_key_exists(self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT, $data)) {
            $value = $data[self::FIELD_MAX_VALUE_UNSIGNED_INT] ?? null;
            $ext = (isset($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT]) && is_array($data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT])) ? $data[self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setMaxValueUnsignedInt($value);
                } else if (is_array($value)) {
                    $this->setMaxValueUnsignedInt(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setMaxValueUnsignedInt(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxValueUnsignedInt(new FHIRUnsignedInt($ext));
            } else {
                $this->setMaxValueUnsignedInt(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_MAX_VALUE_QUANTITY, $data)) {
            if ($data[self::FIELD_MAX_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->setMaxValueQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]);
            } else {
                $this->setMaxValueQuantity(new FHIRQuantity($data[self::FIELD_MAX_VALUE_QUANTITY]));
            }
        }
        if (array_key_exists(self::FIELD_MAX_LENGTH, $data) || array_key_exists(self::FIELD_MAX_LENGTH_EXT, $data)) {
            $value = $data[self::FIELD_MAX_LENGTH] ?? null;
            $ext = (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT])) ? $data[self::FIELD_MAX_LENGTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMaxLength($value);
                } else if (is_array($value)) {
                    $this->setMaxLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxLength(new FHIRInteger($ext));
            } else {
                $this->setMaxLength(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_CONDITION, $data) || array_key_exists(self::FIELD_CONDITION_EXT, $data)) {
            $value = $data[self::FIELD_CONDITION] ?? null;
            $ext = (isset($data[self::FIELD_CONDITION_EXT]) && is_array($data[self::FIELD_CONDITION_EXT])) ? $data[self::FIELD_CONDITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->addCondition($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRId) {
                            $this->addCondition($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addCondition(new FHIRId(array_merge($v, $iext)));
                            } else {
                                $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addCondition(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->addCondition(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addCondition(new FHIRId($iext));
                }
            } else {
                $this->addCondition(new FHIRId(null));
            }
        }
        if (array_key_exists(self::FIELD_CONSTRAINT, $data)) {
            if (is_array($data[self::FIELD_CONSTRAINT])) {
                foreach($data[self::FIELD_CONSTRAINT] as $v) {
                    if ($v instanceof FHIRElementDefinitionConstraint) {
                        $this->addConstraint($v);
                    } else {
                        $this->addConstraint(new FHIRElementDefinitionConstraint($v));
                    }
                }
            } elseif ($data[self::FIELD_CONSTRAINT] instanceof FHIRElementDefinitionConstraint) {
                $this->addConstraint($data[self::FIELD_CONSTRAINT]);
            } else {
                $this->addConstraint(new FHIRElementDefinitionConstraint($data[self::FIELD_CONSTRAINT]));
            }
        }
        if (array_key_exists(self::FIELD_MUST_SUPPORT, $data) || array_key_exists(self::FIELD_MUST_SUPPORT_EXT, $data)) {
            $value = $data[self::FIELD_MUST_SUPPORT] ?? null;
            $ext = (isset($data[self::FIELD_MUST_SUPPORT_EXT]) && is_array($data[self::FIELD_MUST_SUPPORT_EXT])) ? $data[self::FIELD_MUST_SUPPORT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setMustSupport($value);
                } else if (is_array($value)) {
                    $this->setMustSupport(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setMustSupport(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMustSupport(new FHIRBoolean($ext));
            } else {
                $this->setMustSupport(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_IS_MODIFIER, $data) || array_key_exists(self::FIELD_IS_MODIFIER_EXT, $data)) {
            $value = $data[self::FIELD_IS_MODIFIER] ?? null;
            $ext = (isset($data[self::FIELD_IS_MODIFIER_EXT]) && is_array($data[self::FIELD_IS_MODIFIER_EXT])) ? $data[self::FIELD_IS_MODIFIER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsModifier($value);
                } else if (is_array($value)) {
                    $this->setIsModifier(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsModifier(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsModifier(new FHIRBoolean($ext));
            } else {
                $this->setIsModifier(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_IS_SUMMARY, $data) || array_key_exists(self::FIELD_IS_SUMMARY_EXT, $data)) {
            $value = $data[self::FIELD_IS_SUMMARY] ?? null;
            $ext = (isset($data[self::FIELD_IS_SUMMARY_EXT]) && is_array($data[self::FIELD_IS_SUMMARY_EXT])) ? $data[self::FIELD_IS_SUMMARY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setIsSummary($value);
                } else if (is_array($value)) {
                    $this->setIsSummary(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setIsSummary(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIsSummary(new FHIRBoolean($ext));
            } else {
                $this->setIsSummary(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_BINDING, $data)) {
            if ($data[self::FIELD_BINDING] instanceof FHIRElementDefinitionBinding) {
                $this->setBinding($data[self::FIELD_BINDING]);
            } else {
                $this->setBinding(new FHIRElementDefinitionBinding($data[self::FIELD_BINDING]));
            }
        }
        if (array_key_exists(self::FIELD_MAPPING, $data)) {
            if (is_array($data[self::FIELD_MAPPING])) {
                foreach($data[self::FIELD_MAPPING] as $v) {
                    if ($v instanceof FHIRElementDefinitionMapping) {
                        $this->addMapping($v);
                    } else {
                        $this->addMapping(new FHIRElementDefinitionMapping($v));
                    }
                }
            } elseif ($data[self::FIELD_MAPPING] instanceof FHIRElementDefinitionMapping) {
                $this->addMapping($data[self::FIELD_MAPPING]);
            } else {
                $this->addMapping(new FHIRElementDefinitionMapping($data[self::FIELD_MAPPING]));
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The path identifies the element and is expressed as a "."-separated list of
     * ancestor elements, beginning with the name of the resource or extension.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPath(): null|FHIRString
    {
        return $this->path;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The path identifies the element and is expressed as a "."-separated list of
     * ancestor elements, beginning with the name of the resource or extension.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $path
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPath(null|string|FHIRStringPrimitive|FHIRString $path = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $path && !($path instanceof FHIRString)) {
            $path = new FHIRString($path);
        }
        $this->_trackValueSet($this->path, $path);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATH])) {
            $this->_primitiveXmlLocations[self::FIELD_PATH] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATH][0] = $xmlLocation;
        $this->path = $path;
        return $this;
    }

    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPropertyRepresentation[]
     */
    public function getRepresentation(): null|array
    {
        return $this->representation;
    }

    /**
     * How a property is represented when serialized.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Codes that define how this element is represented in instances, when the
     * deviation varies from the normal case.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPropertyRepresentation $representation
     * @return static
     */
    public function addRepresentation(null|FHIRPropertyRepresentation $representation = null): self
    {
        if (null === $representation) {
            $representation = new FHIRPropertyRepresentation();
        }
        $this->_trackValueAdded();
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of this element definition slice, when slicing is working. The name
     * must be a token with no dots or spaces. This is a unique name referring to a
     * specific set of constraints applied to this element, used to provide a name to
     * different slices of the same element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSliceName(): null|FHIRString
    {
        return $this->sliceName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of this element definition slice, when slicing is working. The name
     * must be a token with no dots or spaces. This is a unique name referring to a
     * specific set of constraints applied to this element, used to provide a name to
     * different slices of the same element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $sliceName
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setSliceName(null|string|FHIRStringPrimitive|FHIRString $sliceName = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $sliceName && !($sliceName instanceof FHIRString)) {
            $sliceName = new FHIRString($sliceName);
        }
        $this->_trackValueSet($this->sliceName, $sliceName);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SLICE_NAME])) {
            $this->_primitiveXmlLocations[self::FIELD_SLICE_NAME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SLICE_NAME][0] = $xmlLocation;
        $this->sliceName = $sliceName;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A single preferred label which is the text to display beside the element
     * indicating its meaning or to use to prompt for the element in a user display or
     * form.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getLabel(): null|FHIRString
    {
        return $this->label;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A single preferred label which is the text to display beside the element
     * indicating its meaning or to use to prompt for the element in a user display or
     * form.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $label
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLabel(null|string|FHIRStringPrimitive|FHIRString $label = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $label && !($label instanceof FHIRString)) {
            $label = new FHIRString($label);
        }
        $this->_trackValueSet($this->label, $label);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_LABEL])) {
            $this->_primitiveXmlLocations[self::FIELD_LABEL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_LABEL][0] = $xmlLocation;
        $this->label = $label;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding[]
     */
    public function getCode(): null|array
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that has the same meaning as the element in a particular terminology.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function addCode(null|FHIRCoding $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->code[] = $code;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that the element is sliced into a set of alternative definitions (i.e.
     * in a structure definition, there are multiple different constraints on a single
     * element in the base resource). Slicing can be used in any resource that has
     * cardinality ..* on the base resource, or any resource with a choice of types.
     * The set of slices is any elements that come after this in the element sequence
     * that have the same path, until a shorter path occurs (the shorter path
     * terminates the set).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function getSlicing(): null|FHIRElementDefinitionSlicing
    {
        return $this->slicing;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that the element is sliced into a set of alternative definitions (i.e.
     * in a structure definition, there are multiple different constraints on a single
     * element in the base resource). Slicing can be used in any resource that has
     * cardinality ..* on the base resource, or any resource with a choice of types.
     * The set of slices is any elements that come after this in the element sequence
     * that have the same path, until a shorter path occurs (the shorter path
     * terminates the set).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     * @return static
     */
    public function setSlicing(null|FHIRElementDefinitionSlicing $slicing = null): self
    {
        if (null === $slicing) {
            $slicing = new FHIRElementDefinitionSlicing();
        }
        $this->_trackValueSet($this->slicing, $slicing);
        $this->slicing = $slicing;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise description of what this element means (e.g. for use in autogenerated
     * summaries).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getShort(): null|FHIRString
    {
        return $this->short;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A concise description of what this element means (e.g. for use in autogenerated
     * summaries).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $short
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setShort(null|string|FHIRStringPrimitive|FHIRString $short = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $short && !($short instanceof FHIRString)) {
            $short = new FHIRString($short);
        }
        $this->_trackValueSet($this->short, $short);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_SHORT])) {
            $this->_primitiveXmlLocations[self::FIELD_SHORT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_SHORT][0] = $xmlLocation;
        $this->short = $short;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a complete explanation of the meaning of the data element for human
     * readability. For the case of elements derived from existing elements (e.g.
     * constraints), the definition SHALL be consistent with the base definition, but
     * convey the meaning of the element in the particular context of use of the
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDefinition(): null|FHIRMarkdown
    {
        return $this->definition;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Provides a complete explanation of the meaning of the data element for human
     * readability. For the case of elements derived from existing elements (e.g.
     * constraints), the definition SHALL be consistent with the base definition, but
     * convey the meaning of the element in the particular context of use of the
     * resource.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $definition
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefinition(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $definition = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $definition && !($definition instanceof FHIRMarkdown)) {
            $definition = new FHIRMarkdown($definition);
        }
        $this->_trackValueSet($this->definition, $definition);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFINITION])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFINITION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFINITION][0] = $xmlLocation;
        $this->definition = $definition;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanatory notes and implementation guidance about the data element, including
     * notes about how to use the data properly, exceptions to proper use, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getComment(): null|FHIRMarkdown
    {
        return $this->comment;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanatory notes and implementation guidance about the data element, including
     * notes about how to use the data properly, exceptions to proper use, etc.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $comment
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setComment(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $comment = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $comment && !($comment instanceof FHIRMarkdown)) {
            $comment = new FHIRMarkdown($comment);
        }
        $this->_trackValueSet($this->comment, $comment);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_COMMENT])) {
            $this->_primitiveXmlLocations[self::FIELD_COMMENT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_COMMENT][0] = $xmlLocation;
        $this->comment = $comment;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * This element is for traceability of why the element was created and why the
     * constraints exist as they do. This may be used to point to source materials or
     * specifications that drove the structure of this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getRequirements(): null|FHIRMarkdown
    {
        return $this->requirements;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * This element is for traceability of why the element was created and why the
     * constraints exist as they do. This may be used to point to source materials or
     * specifications that drove the structure of this element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $requirements
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRequirements(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $requirements = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $requirements && !($requirements instanceof FHIRMarkdown)) {
            $requirements = new FHIRMarkdown($requirements);
        }
        $this->_trackValueSet($this->requirements, $requirements);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_REQUIREMENTS])) {
            $this->_primitiveXmlLocations[self::FIELD_REQUIREMENTS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_REQUIREMENTS][0] = $xmlLocation;
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[]
     */
    public function getAlias(): null|array
    {
        return $this->alias;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $alias
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addAlias(null|string|FHIRStringPrimitive|FHIRString $alias = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $alias && !($alias instanceof FHIRString)) {
            $alias = new FHIRString($alias);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ALIAS])) {
            $this->_primitiveXmlLocations[self::FIELD_ALIAS] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ALIAS][] = $xmlLocation;
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies additional names by which this element might also be known.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString[] $alias
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setAlias(array $alias = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_ALIAS]);
        if ([] !== $this->alias) {
            $this->_trackValuesRemoved(count($this->alias));
            $this->alias = [];
        }
        if ([] === $alias) {
            return $this;
        }
        foreach($alias as $v) {
            if ($v instanceof FHIRString) {
                $this->addAlias($v, $xmlLocation);
            } else {
                $this->addAlias(new FHIRString($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getMin(): null|FHIRUnsignedInt
    {
        return $this->min;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum number of times this element SHALL appear in the instance.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $min
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMin(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $min = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $min && !($min instanceof FHIRUnsignedInt)) {
            $min = new FHIRUnsignedInt($min);
        }
        $this->_trackValueSet($this->min, $min);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN][0] = $xmlLocation;
        $this->min = $min;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getMax(): null|FHIRString
    {
        return $this->max;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of times this element is permitted to appear in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $max
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMax(null|string|FHIRStringPrimitive|FHIRString $max = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $max && !($max instanceof FHIRString)) {
            $max = new FHIRString($max);
        }
        $this->_trackValueSet($this->max, $max);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX][0] = $xmlLocation;
        $this->max = $max;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the base definition of the element, provided to make it
     * unnecessary for tools to trace the deviation of the element through the derived
     * and related profiles. This information is provided when the element definition
     * is not the original definition of an element - i.g. either in a constraint on
     * another type, or for elements from a super type in a snap shot.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public function getBase(): null|FHIRElementDefinitionBase
    {
        return $this->base;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Information about the base definition of the element, provided to make it
     * unnecessary for tools to trace the deviation of the element through the derived
     * and related profiles. This information is provided when the element definition
     * is not the original definition of an element - i.g. either in a constraint on
     * another type, or for elements from a super type in a snap shot.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase $base
     * @return static
     */
    public function setBase(null|FHIRElementDefinitionBase $base = null): self
    {
        if (null === $base) {
            $base = new FHIRElementDefinitionBase();
        }
        $this->_trackValueSet($this->base, $base);
        $this->base = $base;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the identity of an element defined elsewhere in the profile whose
     * content rules should be applied to the current element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getContentReference(): null|FHIRUri
    {
        return $this->contentReference;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the identity of an element defined elsewhere in the profile whose
     * content rules should be applied to the current element.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $contentReference
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setContentReference(null|string|FHIRUriPrimitive|FHIRUri $contentReference = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $contentReference && !($contentReference instanceof FHIRUri)) {
            $contentReference = new FHIRUri($contentReference);
        }
        $this->_trackValueSet($this->contentReference, $contentReference);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CONTENT_REFERENCE])) {
            $this->_primitiveXmlLocations[self::FIELD_CONTENT_REFERENCE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CONTENT_REFERENCE][0] = $xmlLocation;
        $this->contentReference = $contentReference;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public function getType(): null|array
    {
        return $this->type;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The data type or resource that the value of this element is permitted to be.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType $type
     * @return static
     */
    public function addType(null|FHIRElementDefinitionType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRElementDefinitionType();
        }
        $this->_trackValueAdded();
        $this->type[] = $type;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary(): null|FHIRBase64Binary
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $defaultValueBase64Binary = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueBase64Binary && !($defaultValueBase64Binary instanceof FHIRBase64Binary)) {
            $defaultValueBase64Binary = new FHIRBase64Binary($defaultValueBase64Binary);
        }
        $this->_trackValueSet($this->defaultValueBase64Binary, $defaultValueBase64Binary);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY][0] = $xmlLocation;
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean(): null|FHIRBoolean
    {
        return $this->defaultValueBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $defaultValueBoolean
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $defaultValueBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueBoolean && !($defaultValueBoolean instanceof FHIRBoolean)) {
            $defaultValueBoolean = new FHIRBoolean($defaultValueBoolean);
        }
        $this->_trackValueSet($this->defaultValueBoolean, $defaultValueBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN][0] = $xmlLocation;
        $this->defaultValueBoolean = $defaultValueBoolean;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode(): null|FHIRCode
    {
        return $this->defaultValueCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $defaultValueCode
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueCode(null|string|FHIRCodePrimitive|FHIRCode $defaultValueCode = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueCode && !($defaultValueCode instanceof FHIRCode)) {
            $defaultValueCode = new FHIRCode($defaultValueCode);
        }
        $this->_trackValueSet($this->defaultValueCode, $defaultValueCode);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE][0] = $xmlLocation;
        $this->defaultValueCode = $defaultValueCode;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate(): null|FHIRDate
    {
        return $this->defaultValueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $defaultValueDate
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $defaultValueDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueDate && !($defaultValueDate instanceof FHIRDate)) {
            $defaultValueDate = new FHIRDate($defaultValueDate);
        }
        $this->_trackValueSet($this->defaultValueDate, $defaultValueDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE][0] = $xmlLocation;
        $this->defaultValueDate = $defaultValueDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime(): null|FHIRDateTime
    {
        return $this->defaultValueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $defaultValueDateTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $defaultValueDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueDateTime && !($defaultValueDateTime instanceof FHIRDateTime)) {
            $defaultValueDateTime = new FHIRDateTime($defaultValueDateTime);
        }
        $this->_trackValueSet($this->defaultValueDateTime, $defaultValueDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME][0] = $xmlLocation;
        $this->defaultValueDateTime = $defaultValueDateTime;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal(): null|FHIRDecimal
    {
        return $this->defaultValueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $defaultValueDecimal
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $defaultValueDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueDecimal && !($defaultValueDecimal instanceof FHIRDecimal)) {
            $defaultValueDecimal = new FHIRDecimal($defaultValueDecimal);
        }
        $this->_trackValueSet($this->defaultValueDecimal, $defaultValueDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL][0] = $xmlLocation;
        $this->defaultValueDecimal = $defaultValueDecimal;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getDefaultValueId(): null|FHIRId
    {
        return $this->defaultValueId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $defaultValueId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueId(null|string|FHIRIdPrimitive|FHIRId $defaultValueId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueId && !($defaultValueId instanceof FHIRId)) {
            $defaultValueId = new FHIRId($defaultValueId);
        }
        $this->_trackValueSet($this->defaultValueId, $defaultValueId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID][0] = $xmlLocation;
        $this->defaultValueId = $defaultValueId;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant(): null|FHIRInstant
    {
        return $this->defaultValueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $defaultValueInstant
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $defaultValueInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueInstant && !($defaultValueInstant instanceof FHIRInstant)) {
            $defaultValueInstant = new FHIRInstant($defaultValueInstant);
        }
        $this->_trackValueSet($this->defaultValueInstant, $defaultValueInstant);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT][0] = $xmlLocation;
        $this->defaultValueInstant = $defaultValueInstant;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger(): null|FHIRInteger
    {
        return $this->defaultValueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $defaultValueInteger
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $defaultValueInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueInteger && !($defaultValueInteger instanceof FHIRInteger)) {
            $defaultValueInteger = new FHIRInteger($defaultValueInteger);
        }
        $this->_trackValueSet($this->defaultValueInteger, $defaultValueInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER][0] = $xmlLocation;
        $this->defaultValueInteger = $defaultValueInteger;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown(): null|FHIRMarkdown
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $defaultValueMarkdown = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueMarkdown && !($defaultValueMarkdown instanceof FHIRMarkdown)) {
            $defaultValueMarkdown = new FHIRMarkdown($defaultValueMarkdown);
        }
        $this->_trackValueSet($this->defaultValueMarkdown, $defaultValueMarkdown);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN][0] = $xmlLocation;
        $this->defaultValueMarkdown = $defaultValueMarkdown;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function getDefaultValueOid(): null|FHIROid
    {
        return $this->defaultValueOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $defaultValueOid
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueOid(null|string|FHIROidPrimitive|FHIROid $defaultValueOid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueOid && !($defaultValueOid instanceof FHIROid)) {
            $defaultValueOid = new FHIROid($defaultValueOid);
        }
        $this->_trackValueSet($this->defaultValueOid, $defaultValueOid);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID][0] = $xmlLocation;
        $this->defaultValueOid = $defaultValueOid;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt(): null|FHIRPositiveInt
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $defaultValuePositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValuePositiveInt && !($defaultValuePositiveInt instanceof FHIRPositiveInt)) {
            $defaultValuePositiveInt = new FHIRPositiveInt($defaultValuePositiveInt);
        }
        $this->_trackValueSet($this->defaultValuePositiveInt, $defaultValuePositiveInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT][0] = $xmlLocation;
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDefaultValueString(): null|FHIRString
    {
        return $this->defaultValueString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $defaultValueString
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueString(null|string|FHIRStringPrimitive|FHIRString $defaultValueString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueString && !($defaultValueString instanceof FHIRString)) {
            $defaultValueString = new FHIRString($defaultValueString);
        }
        $this->_trackValueSet($this->defaultValueString, $defaultValueString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING][0] = $xmlLocation;
        $this->defaultValueString = $defaultValueString;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime(): null|FHIRTime
    {
        return $this->defaultValueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $defaultValueTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $defaultValueTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueTime && !($defaultValueTime instanceof FHIRTime)) {
            $defaultValueTime = new FHIRTime($defaultValueTime);
        }
        $this->_trackValueSet($this->defaultValueTime, $defaultValueTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME][0] = $xmlLocation;
        $this->defaultValueTime = $defaultValueTime;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $defaultValueUnsignedInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueUnsignedInt && !($defaultValueUnsignedInt instanceof FHIRUnsignedInt)) {
            $defaultValueUnsignedInt = new FHIRUnsignedInt($defaultValueUnsignedInt);
        }
        $this->_trackValueSet($this->defaultValueUnsignedInt, $defaultValueUnsignedInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT][0] = $xmlLocation;
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri(): null|FHIRUri
    {
        return $this->defaultValueUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $defaultValueUri
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDefaultValueUri(null|string|FHIRUriPrimitive|FHIRUri $defaultValueUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $defaultValueUri && !($defaultValueUri instanceof FHIRUri)) {
            $defaultValueUri = new FHIRUri($defaultValueUri);
        }
        $this->_trackValueSet($this->defaultValueUri, $defaultValueUri);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI])) {
            $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI][0] = $xmlLocation;
        $this->defaultValueUri = $defaultValueUri;
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress(): null|FHIRAddress
    {
        return $this->defaultValueAddress;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress $defaultValueAddress
     * @return static
     */
    public function setDefaultValueAddress(null|FHIRAddress $defaultValueAddress = null): self
    {
        if (null === $defaultValueAddress) {
            $defaultValueAddress = new FHIRAddress();
        }
        $this->_trackValueSet($this->defaultValueAddress, $defaultValueAddress);
        $this->defaultValueAddress = $defaultValueAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDefaultValueAge(): null|FHIRAge
    {
        return $this->defaultValueAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge $defaultValueAge
     * @return static
     */
    public function setDefaultValueAge(null|FHIRAge $defaultValueAge = null): self
    {
        if (null === $defaultValueAge) {
            $defaultValueAge = new FHIRAge();
        }
        $this->_trackValueSet($this->defaultValueAge, $defaultValueAge);
        $this->defaultValueAge = $defaultValueAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation(): null|FHIRAnnotation
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     * @return static
     */
    public function setDefaultValueAnnotation(null|FHIRAnnotation $defaultValueAnnotation = null): self
    {
        if (null === $defaultValueAnnotation) {
            $defaultValueAnnotation = new FHIRAnnotation();
        }
        $this->_trackValueSet($this->defaultValueAnnotation, $defaultValueAnnotation);
        $this->defaultValueAnnotation = $defaultValueAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment(): null|FHIRAttachment
    {
        return $this->defaultValueAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $defaultValueAttachment
     * @return static
     */
    public function setDefaultValueAttachment(null|FHIRAttachment $defaultValueAttachment = null): self
    {
        if (null === $defaultValueAttachment) {
            $defaultValueAttachment = new FHIRAttachment();
        }
        $this->_trackValueSet($this->defaultValueAttachment, $defaultValueAttachment);
        $this->defaultValueAttachment = $defaultValueAttachment;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     * @return static
     */
    public function setDefaultValueCodeableConcept(null|FHIRCodeableConcept $defaultValueCodeableConcept = null): self
    {
        if (null === $defaultValueCodeableConcept) {
            $defaultValueCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->defaultValueCodeableConcept, $defaultValueCodeableConcept);
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding(): null|FHIRCoding
    {
        return $this->defaultValueCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $defaultValueCoding
     * @return static
     */
    public function setDefaultValueCoding(null|FHIRCoding $defaultValueCoding = null): self
    {
        if (null === $defaultValueCoding) {
            $defaultValueCoding = new FHIRCoding();
        }
        $this->_trackValueSet($this->defaultValueCoding, $defaultValueCoding);
        $this->defaultValueCoding = $defaultValueCoding;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint(): null|FHIRContactPoint
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     * @return static
     */
    public function setDefaultValueContactPoint(null|FHIRContactPoint $defaultValueContactPoint = null): self
    {
        if (null === $defaultValueContactPoint) {
            $defaultValueContactPoint = new FHIRContactPoint();
        }
        $this->_trackValueSet($this->defaultValueContactPoint, $defaultValueContactPoint);
        $this->defaultValueContactPoint = $defaultValueContactPoint;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getDefaultValueCount(): null|FHIRCount
    {
        return $this->defaultValueCount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount $defaultValueCount
     * @return static
     */
    public function setDefaultValueCount(null|FHIRCount $defaultValueCount = null): self
    {
        if (null === $defaultValueCount) {
            $defaultValueCount = new FHIRCount();
        }
        $this->_trackValueSet($this->defaultValueCount, $defaultValueCount);
        $this->defaultValueCount = $defaultValueCount;
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getDefaultValueDistance(): null|FHIRDistance
    {
        return $this->defaultValueDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance $defaultValueDistance
     * @return static
     */
    public function setDefaultValueDistance(null|FHIRDistance $defaultValueDistance = null): self
    {
        if (null === $defaultValueDistance) {
            $defaultValueDistance = new FHIRDistance();
        }
        $this->_trackValueSet($this->defaultValueDistance, $defaultValueDistance);
        $this->defaultValueDistance = $defaultValueDistance;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getDefaultValueDuration(): null|FHIRDuration
    {
        return $this->defaultValueDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $defaultValueDuration
     * @return static
     */
    public function setDefaultValueDuration(null|FHIRDuration $defaultValueDuration = null): self
    {
        if (null === $defaultValueDuration) {
            $defaultValueDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->defaultValueDuration, $defaultValueDuration);
        $this->defaultValueDuration = $defaultValueDuration;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName(): null|FHIRHumanName
    {
        return $this->defaultValueHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName $defaultValueHumanName
     * @return static
     */
    public function setDefaultValueHumanName(null|FHIRHumanName $defaultValueHumanName = null): self
    {
        if (null === $defaultValueHumanName) {
            $defaultValueHumanName = new FHIRHumanName();
        }
        $this->_trackValueSet($this->defaultValueHumanName, $defaultValueHumanName);
        $this->defaultValueHumanName = $defaultValueHumanName;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier(): null|FHIRIdentifier
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     * @return static
     */
    public function setDefaultValueIdentifier(null|FHIRIdentifier $defaultValueIdentifier = null): self
    {
        if (null === $defaultValueIdentifier) {
            $defaultValueIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->defaultValueIdentifier, $defaultValueIdentifier);
        $this->defaultValueIdentifier = $defaultValueIdentifier;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getDefaultValueMoney(): null|FHIRMoney
    {
        return $this->defaultValueMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $defaultValueMoney
     * @return static
     */
    public function setDefaultValueMoney(null|FHIRMoney $defaultValueMoney = null): self
    {
        if (null === $defaultValueMoney) {
            $defaultValueMoney = new FHIRMoney();
        }
        $this->_trackValueSet($this->defaultValueMoney, $defaultValueMoney);
        $this->defaultValueMoney = $defaultValueMoney;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod(): null|FHIRPeriod
    {
        return $this->defaultValuePeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $defaultValuePeriod
     * @return static
     */
    public function setDefaultValuePeriod(null|FHIRPeriod $defaultValuePeriod = null): self
    {
        if (null === $defaultValuePeriod) {
            $defaultValuePeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->defaultValuePeriod, $defaultValuePeriod);
        $this->defaultValuePeriod = $defaultValuePeriod;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity(): null|FHIRQuantity
    {
        return $this->defaultValueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $defaultValueQuantity
     * @return static
     */
    public function setDefaultValueQuantity(null|FHIRQuantity $defaultValueQuantity = null): self
    {
        if (null === $defaultValueQuantity) {
            $defaultValueQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->defaultValueQuantity, $defaultValueQuantity);
        $this->defaultValueQuantity = $defaultValueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange(): null|FHIRRange
    {
        return $this->defaultValueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $defaultValueRange
     * @return static
     */
    public function setDefaultValueRange(null|FHIRRange $defaultValueRange = null): self
    {
        if (null === $defaultValueRange) {
            $defaultValueRange = new FHIRRange();
        }
        $this->_trackValueSet($this->defaultValueRange, $defaultValueRange);
        $this->defaultValueRange = $defaultValueRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio(): null|FHIRRatio
    {
        return $this->defaultValueRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio $defaultValueRatio
     * @return static
     */
    public function setDefaultValueRatio(null|FHIRRatio $defaultValueRatio = null): self
    {
        if (null === $defaultValueRatio) {
            $defaultValueRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->defaultValueRatio, $defaultValueRatio);
        $this->defaultValueRatio = $defaultValueRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference(): null|FHIRReference
    {
        return $this->defaultValueReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $defaultValueReference
     * @return static
     */
    public function setDefaultValueReference(null|FHIRReference $defaultValueReference = null): self
    {
        if (null === $defaultValueReference) {
            $defaultValueReference = new FHIRReference();
        }
        $this->_trackValueSet($this->defaultValueReference, $defaultValueReference);
        $this->defaultValueReference = $defaultValueReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData(): null|FHIRSampledData
    {
        return $this->defaultValueSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData $defaultValueSampledData
     * @return static
     */
    public function setDefaultValueSampledData(null|FHIRSampledData $defaultValueSampledData = null): self
    {
        if (null === $defaultValueSampledData) {
            $defaultValueSampledData = new FHIRSampledData();
        }
        $this->_trackValueSet($this->defaultValueSampledData, $defaultValueSampledData);
        $this->defaultValueSampledData = $defaultValueSampledData;
        return $this;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature(): null|FHIRSignature
    {
        return $this->defaultValueSignature;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature $defaultValueSignature
     * @return static
     */
    public function setDefaultValueSignature(null|FHIRSignature $defaultValueSignature = null): self
    {
        if (null === $defaultValueSignature) {
            $defaultValueSignature = new FHIRSignature();
        }
        $this->_trackValueSet($this->defaultValueSignature, $defaultValueSignature);
        $this->defaultValueSignature = $defaultValueSignature;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming(): null|FHIRTiming
    {
        return $this->defaultValueTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $defaultValueTiming
     * @return static
     */
    public function setDefaultValueTiming(null|FHIRTiming $defaultValueTiming = null): self
    {
        if (null === $defaultValueTiming) {
            $defaultValueTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->defaultValueTiming, $defaultValueTiming);
        $this->defaultValueTiming = $defaultValueTiming;
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta(): null|FHIRMeta
    {
        return $this->defaultValueMeta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value that should be used if there is no value stated in the instance (e.g.
     * 'if not otherwise specified, the abstract is false').
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta $defaultValueMeta
     * @return static
     */
    public function setDefaultValueMeta(null|FHIRMeta $defaultValueMeta = null): self
    {
        if (null === $defaultValueMeta) {
            $defaultValueMeta = new FHIRMeta();
        }
        $this->_trackValueSet($this->defaultValueMeta, $defaultValueMeta);
        $this->defaultValueMeta = $defaultValueMeta;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Implicit meaning that is to be understood when this element is missing (e.g.
     * 'when this element is missing, the period is ongoing'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getMeaningWhenMissing(): null|FHIRMarkdown
    {
        return $this->meaningWhenMissing;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The Implicit meaning that is to be understood when this element is missing (e.g.
     * 'when this element is missing, the period is ongoing'.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $meaningWhenMissing
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMeaningWhenMissing(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $meaningWhenMissing = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $meaningWhenMissing && !($meaningWhenMissing instanceof FHIRMarkdown)) {
            $meaningWhenMissing = new FHIRMarkdown($meaningWhenMissing);
        }
        $this->_trackValueSet($this->meaningWhenMissing, $meaningWhenMissing);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MEANING_WHEN_MISSING])) {
            $this->_primitiveXmlLocations[self::FIELD_MEANING_WHEN_MISSING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MEANING_WHEN_MISSING][0] = $xmlLocation;
        $this->meaningWhenMissing = $meaningWhenMissing;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the order of the repeating element has meaning and
     * describes what that meaning is. If absent, it means that the order of the
     * element has no meaning.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getOrderMeaning(): null|FHIRString
    {
        return $this->orderMeaning;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If present, indicates that the order of the repeating element has meaning and
     * describes what that meaning is. If absent, it means that the order of the
     * element has no meaning.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $orderMeaning
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOrderMeaning(null|string|FHIRStringPrimitive|FHIRString $orderMeaning = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $orderMeaning && !($orderMeaning instanceof FHIRString)) {
            $orderMeaning = new FHIRString($orderMeaning);
        }
        $this->_trackValueSet($this->orderMeaning, $orderMeaning);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_ORDER_MEANING])) {
            $this->_primitiveXmlLocations[self::FIELD_ORDER_MEANING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_ORDER_MEANING][0] = $xmlLocation;
        $this->orderMeaning = $orderMeaning;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    public function getFixedBase64Binary(): null|FHIRBase64Binary
    {
        return $this->fixedBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary $fixedBase64Binary
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $fixedBase64Binary = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedBase64Binary && !($fixedBase64Binary instanceof FHIRBase64Binary)) {
            $fixedBase64Binary = new FHIRBase64Binary($fixedBase64Binary);
        }
        $this->_trackValueSet($this->fixedBase64Binary, $fixedBase64Binary);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_BASE_64BINARY])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_BASE_64BINARY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_BASE_64BINARY][0] = $xmlLocation;
        $this->fixedBase64Binary = $fixedBase64Binary;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getFixedBoolean(): null|FHIRBoolean
    {
        return $this->fixedBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $fixedBoolean
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $fixedBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedBoolean && !($fixedBoolean instanceof FHIRBoolean)) {
            $fixedBoolean = new FHIRBoolean($fixedBoolean);
        }
        $this->_trackValueSet($this->fixedBoolean, $fixedBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_BOOLEAN][0] = $xmlLocation;
        $this->fixedBoolean = $fixedBoolean;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getFixedCode(): null|FHIRCode
    {
        return $this->fixedCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $fixedCode
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedCode(null|string|FHIRCodePrimitive|FHIRCode $fixedCode = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedCode && !($fixedCode instanceof FHIRCode)) {
            $fixedCode = new FHIRCode($fixedCode);
        }
        $this->_trackValueSet($this->fixedCode, $fixedCode);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_CODE])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_CODE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_CODE][0] = $xmlLocation;
        $this->fixedCode = $fixedCode;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getFixedDate(): null|FHIRDate
    {
        return $this->fixedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $fixedDate
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $fixedDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedDate && !($fixedDate instanceof FHIRDate)) {
            $fixedDate = new FHIRDate($fixedDate);
        }
        $this->_trackValueSet($this->fixedDate, $fixedDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_DATE][0] = $xmlLocation;
        $this->fixedDate = $fixedDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getFixedDateTime(): null|FHIRDateTime
    {
        return $this->fixedDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $fixedDateTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $fixedDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedDateTime && !($fixedDateTime instanceof FHIRDateTime)) {
            $fixedDateTime = new FHIRDateTime($fixedDateTime);
        }
        $this->_trackValueSet($this->fixedDateTime, $fixedDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_DATE_TIME][0] = $xmlLocation;
        $this->fixedDateTime = $fixedDateTime;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getFixedDecimal(): null|FHIRDecimal
    {
        return $this->fixedDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $fixedDecimal
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $fixedDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedDecimal && !($fixedDecimal instanceof FHIRDecimal)) {
            $fixedDecimal = new FHIRDecimal($fixedDecimal);
        }
        $this->_trackValueSet($this->fixedDecimal, $fixedDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_DECIMAL][0] = $xmlLocation;
        $this->fixedDecimal = $fixedDecimal;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getFixedId(): null|FHIRId
    {
        return $this->fixedId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $fixedId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedId(null|string|FHIRIdPrimitive|FHIRId $fixedId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedId && !($fixedId instanceof FHIRId)) {
            $fixedId = new FHIRId($fixedId);
        }
        $this->_trackValueSet($this->fixedId, $fixedId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_ID][0] = $xmlLocation;
        $this->fixedId = $fixedId;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getFixedInstant(): null|FHIRInstant
    {
        return $this->fixedInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $fixedInstant
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $fixedInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedInstant && !($fixedInstant instanceof FHIRInstant)) {
            $fixedInstant = new FHIRInstant($fixedInstant);
        }
        $this->_trackValueSet($this->fixedInstant, $fixedInstant);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_INSTANT])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_INSTANT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_INSTANT][0] = $xmlLocation;
        $this->fixedInstant = $fixedInstant;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getFixedInteger(): null|FHIRInteger
    {
        return $this->fixedInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $fixedInteger
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $fixedInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedInteger && !($fixedInteger instanceof FHIRInteger)) {
            $fixedInteger = new FHIRInteger($fixedInteger);
        }
        $this->_trackValueSet($this->fixedInteger, $fixedInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_INTEGER][0] = $xmlLocation;
        $this->fixedInteger = $fixedInteger;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getFixedMarkdown(): null|FHIRMarkdown
    {
        return $this->fixedMarkdown;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $fixedMarkdown
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $fixedMarkdown = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedMarkdown && !($fixedMarkdown instanceof FHIRMarkdown)) {
            $fixedMarkdown = new FHIRMarkdown($fixedMarkdown);
        }
        $this->_trackValueSet($this->fixedMarkdown, $fixedMarkdown);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_MARKDOWN])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_MARKDOWN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_MARKDOWN][0] = $xmlLocation;
        $this->fixedMarkdown = $fixedMarkdown;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function getFixedOid(): null|FHIROid
    {
        return $this->fixedOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $fixedOid
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedOid(null|string|FHIROidPrimitive|FHIROid $fixedOid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedOid && !($fixedOid instanceof FHIROid)) {
            $fixedOid = new FHIROid($fixedOid);
        }
        $this->_trackValueSet($this->fixedOid, $fixedOid);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_OID])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_OID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_OID][0] = $xmlLocation;
        $this->fixedOid = $fixedOid;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getFixedPositiveInt(): null|FHIRPositiveInt
    {
        return $this->fixedPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $fixedPositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedPositiveInt && !($fixedPositiveInt instanceof FHIRPositiveInt)) {
            $fixedPositiveInt = new FHIRPositiveInt($fixedPositiveInt);
        }
        $this->_trackValueSet($this->fixedPositiveInt, $fixedPositiveInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_POSITIVE_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_POSITIVE_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_POSITIVE_INT][0] = $xmlLocation;
        $this->fixedPositiveInt = $fixedPositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getFixedString(): null|FHIRString
    {
        return $this->fixedString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $fixedString
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedString(null|string|FHIRStringPrimitive|FHIRString $fixedString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedString && !($fixedString instanceof FHIRString)) {
            $fixedString = new FHIRString($fixedString);
        }
        $this->_trackValueSet($this->fixedString, $fixedString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_STRING][0] = $xmlLocation;
        $this->fixedString = $fixedString;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getFixedTime(): null|FHIRTime
    {
        return $this->fixedTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $fixedTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $fixedTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedTime && !($fixedTime instanceof FHIRTime)) {
            $fixedTime = new FHIRTime($fixedTime);
        }
        $this->_trackValueSet($this->fixedTime, $fixedTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_TIME][0] = $xmlLocation;
        $this->fixedTime = $fixedTime;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getFixedUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->fixedUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $fixedUnsignedInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedUnsignedInt && !($fixedUnsignedInt instanceof FHIRUnsignedInt)) {
            $fixedUnsignedInt = new FHIRUnsignedInt($fixedUnsignedInt);
        }
        $this->_trackValueSet($this->fixedUnsignedInt, $fixedUnsignedInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_UNSIGNED_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_UNSIGNED_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_UNSIGNED_INT][0] = $xmlLocation;
        $this->fixedUnsignedInt = $fixedUnsignedInt;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getFixedUri(): null|FHIRUri
    {
        return $this->fixedUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $fixedUri
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setFixedUri(null|string|FHIRUriPrimitive|FHIRUri $fixedUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $fixedUri && !($fixedUri instanceof FHIRUri)) {
            $fixedUri = new FHIRUri($fixedUri);
        }
        $this->_trackValueSet($this->fixedUri, $fixedUri);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_FIXED_URI])) {
            $this->_primitiveXmlLocations[self::FIELD_FIXED_URI] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_FIXED_URI][0] = $xmlLocation;
        $this->fixedUri = $fixedUri;
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    public function getFixedAddress(): null|FHIRAddress
    {
        return $this->fixedAddress;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress $fixedAddress
     * @return static
     */
    public function setFixedAddress(null|FHIRAddress $fixedAddress = null): self
    {
        if (null === $fixedAddress) {
            $fixedAddress = new FHIRAddress();
        }
        $this->_trackValueSet($this->fixedAddress, $fixedAddress);
        $this->fixedAddress = $fixedAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getFixedAge(): null|FHIRAge
    {
        return $this->fixedAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge $fixedAge
     * @return static
     */
    public function setFixedAge(null|FHIRAge $fixedAge = null): self
    {
        if (null === $fixedAge) {
            $fixedAge = new FHIRAge();
        }
        $this->_trackValueSet($this->fixedAge, $fixedAge);
        $this->fixedAge = $fixedAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function getFixedAnnotation(): null|FHIRAnnotation
    {
        return $this->fixedAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $fixedAnnotation
     * @return static
     */
    public function setFixedAnnotation(null|FHIRAnnotation $fixedAnnotation = null): self
    {
        if (null === $fixedAnnotation) {
            $fixedAnnotation = new FHIRAnnotation();
        }
        $this->_trackValueSet($this->fixedAnnotation, $fixedAnnotation);
        $this->fixedAnnotation = $fixedAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getFixedAttachment(): null|FHIRAttachment
    {
        return $this->fixedAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $fixedAttachment
     * @return static
     */
    public function setFixedAttachment(null|FHIRAttachment $fixedAttachment = null): self
    {
        if (null === $fixedAttachment) {
            $fixedAttachment = new FHIRAttachment();
        }
        $this->_trackValueSet($this->fixedAttachment, $fixedAttachment);
        $this->fixedAttachment = $fixedAttachment;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getFixedCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->fixedCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
     * @return static
     */
    public function setFixedCodeableConcept(null|FHIRCodeableConcept $fixedCodeableConcept = null): self
    {
        if (null === $fixedCodeableConcept) {
            $fixedCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->fixedCodeableConcept, $fixedCodeableConcept);
        $this->fixedCodeableConcept = $fixedCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getFixedCoding(): null|FHIRCoding
    {
        return $this->fixedCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $fixedCoding
     * @return static
     */
    public function setFixedCoding(null|FHIRCoding $fixedCoding = null): self
    {
        if (null === $fixedCoding) {
            $fixedCoding = new FHIRCoding();
        }
        $this->_trackValueSet($this->fixedCoding, $fixedCoding);
        $this->fixedCoding = $fixedCoding;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    public function getFixedContactPoint(): null|FHIRContactPoint
    {
        return $this->fixedContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint $fixedContactPoint
     * @return static
     */
    public function setFixedContactPoint(null|FHIRContactPoint $fixedContactPoint = null): self
    {
        if (null === $fixedContactPoint) {
            $fixedContactPoint = new FHIRContactPoint();
        }
        $this->_trackValueSet($this->fixedContactPoint, $fixedContactPoint);
        $this->fixedContactPoint = $fixedContactPoint;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getFixedCount(): null|FHIRCount
    {
        return $this->fixedCount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount $fixedCount
     * @return static
     */
    public function setFixedCount(null|FHIRCount $fixedCount = null): self
    {
        if (null === $fixedCount) {
            $fixedCount = new FHIRCount();
        }
        $this->_trackValueSet($this->fixedCount, $fixedCount);
        $this->fixedCount = $fixedCount;
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getFixedDistance(): null|FHIRDistance
    {
        return $this->fixedDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance $fixedDistance
     * @return static
     */
    public function setFixedDistance(null|FHIRDistance $fixedDistance = null): self
    {
        if (null === $fixedDistance) {
            $fixedDistance = new FHIRDistance();
        }
        $this->_trackValueSet($this->fixedDistance, $fixedDistance);
        $this->fixedDistance = $fixedDistance;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getFixedDuration(): null|FHIRDuration
    {
        return $this->fixedDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $fixedDuration
     * @return static
     */
    public function setFixedDuration(null|FHIRDuration $fixedDuration = null): self
    {
        if (null === $fixedDuration) {
            $fixedDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->fixedDuration, $fixedDuration);
        $this->fixedDuration = $fixedDuration;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    public function getFixedHumanName(): null|FHIRHumanName
    {
        return $this->fixedHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName $fixedHumanName
     * @return static
     */
    public function setFixedHumanName(null|FHIRHumanName $fixedHumanName = null): self
    {
        if (null === $fixedHumanName) {
            $fixedHumanName = new FHIRHumanName();
        }
        $this->_trackValueSet($this->fixedHumanName, $fixedHumanName);
        $this->fixedHumanName = $fixedHumanName;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getFixedIdentifier(): null|FHIRIdentifier
    {
        return $this->fixedIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $fixedIdentifier
     * @return static
     */
    public function setFixedIdentifier(null|FHIRIdentifier $fixedIdentifier = null): self
    {
        if (null === $fixedIdentifier) {
            $fixedIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->fixedIdentifier, $fixedIdentifier);
        $this->fixedIdentifier = $fixedIdentifier;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getFixedMoney(): null|FHIRMoney
    {
        return $this->fixedMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $fixedMoney
     * @return static
     */
    public function setFixedMoney(null|FHIRMoney $fixedMoney = null): self
    {
        if (null === $fixedMoney) {
            $fixedMoney = new FHIRMoney();
        }
        $this->_trackValueSet($this->fixedMoney, $fixedMoney);
        $this->fixedMoney = $fixedMoney;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getFixedPeriod(): null|FHIRPeriod
    {
        return $this->fixedPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $fixedPeriod
     * @return static
     */
    public function setFixedPeriod(null|FHIRPeriod $fixedPeriod = null): self
    {
        if (null === $fixedPeriod) {
            $fixedPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->fixedPeriod, $fixedPeriod);
        $this->fixedPeriod = $fixedPeriod;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getFixedQuantity(): null|FHIRQuantity
    {
        return $this->fixedQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $fixedQuantity
     * @return static
     */
    public function setFixedQuantity(null|FHIRQuantity $fixedQuantity = null): self
    {
        if (null === $fixedQuantity) {
            $fixedQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->fixedQuantity, $fixedQuantity);
        $this->fixedQuantity = $fixedQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getFixedRange(): null|FHIRRange
    {
        return $this->fixedRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $fixedRange
     * @return static
     */
    public function setFixedRange(null|FHIRRange $fixedRange = null): self
    {
        if (null === $fixedRange) {
            $fixedRange = new FHIRRange();
        }
        $this->_trackValueSet($this->fixedRange, $fixedRange);
        $this->fixedRange = $fixedRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    public function getFixedRatio(): null|FHIRRatio
    {
        return $this->fixedRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio $fixedRatio
     * @return static
     */
    public function setFixedRatio(null|FHIRRatio $fixedRatio = null): self
    {
        if (null === $fixedRatio) {
            $fixedRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->fixedRatio, $fixedRatio);
        $this->fixedRatio = $fixedRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getFixedReference(): null|FHIRReference
    {
        return $this->fixedReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $fixedReference
     * @return static
     */
    public function setFixedReference(null|FHIRReference $fixedReference = null): self
    {
        if (null === $fixedReference) {
            $fixedReference = new FHIRReference();
        }
        $this->_trackValueSet($this->fixedReference, $fixedReference);
        $this->fixedReference = $fixedReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    public function getFixedSampledData(): null|FHIRSampledData
    {
        return $this->fixedSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData $fixedSampledData
     * @return static
     */
    public function setFixedSampledData(null|FHIRSampledData $fixedSampledData = null): self
    {
        if (null === $fixedSampledData) {
            $fixedSampledData = new FHIRSampledData();
        }
        $this->_trackValueSet($this->fixedSampledData, $fixedSampledData);
        $this->fixedSampledData = $fixedSampledData;
        return $this;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    public function getFixedSignature(): null|FHIRSignature
    {
        return $this->fixedSignature;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature $fixedSignature
     * @return static
     */
    public function setFixedSignature(null|FHIRSignature $fixedSignature = null): self
    {
        if (null === $fixedSignature) {
            $fixedSignature = new FHIRSignature();
        }
        $this->_trackValueSet($this->fixedSignature, $fixedSignature);
        $this->fixedSignature = $fixedSignature;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    public function getFixedTiming(): null|FHIRTiming
    {
        return $this->fixedTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $fixedTiming
     * @return static
     */
    public function setFixedTiming(null|FHIRTiming $fixedTiming = null): self
    {
        if (null === $fixedTiming) {
            $fixedTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->fixedTiming, $fixedTiming);
        $this->fixedTiming = $fixedTiming;
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    public function getFixedMeta(): null|FHIRMeta
    {
        return $this->fixedMeta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that SHALL be exactly the value for this element in the
     * instance. For purposes of comparison, non-significant whitespace is ignored, and
     * all values must be an exact match (case and accent sensitive). Missing
     * elements/attributes must also be missing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta $fixedMeta
     * @return static
     */
    public function setFixedMeta(null|FHIRMeta $fixedMeta = null): self
    {
        if (null === $fixedMeta) {
            $fixedMeta = new FHIRMeta();
        }
        $this->_trackValueSet($this->fixedMeta, $fixedMeta);
        $this->fixedMeta = $fixedMeta;
        return $this;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary
     */
    public function getPatternBase64Binary(): null|FHIRBase64Binary
    {
        return $this->patternBase64Binary;
    }

    /**
     * A stream of bytes
     * A stream of bytes, base64 encoded
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRBase64BinaryPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary $patternBase64Binary
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternBase64Binary(null|string|FHIRBase64BinaryPrimitive|FHIRBase64Binary $patternBase64Binary = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternBase64Binary && !($patternBase64Binary instanceof FHIRBase64Binary)) {
            $patternBase64Binary = new FHIRBase64Binary($patternBase64Binary);
        }
        $this->_trackValueSet($this->patternBase64Binary, $patternBase64Binary);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_BASE_64BINARY])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_BASE_64BINARY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_BASE_64BINARY][0] = $xmlLocation;
        $this->patternBase64Binary = $patternBase64Binary;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getPatternBoolean(): null|FHIRBoolean
    {
        return $this->patternBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $patternBoolean
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $patternBoolean = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternBoolean && !($patternBoolean instanceof FHIRBoolean)) {
            $patternBoolean = new FHIRBoolean($patternBoolean);
        }
        $this->_trackValueSet($this->patternBoolean, $patternBoolean);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_BOOLEAN])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_BOOLEAN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_BOOLEAN][0] = $xmlLocation;
        $this->patternBoolean = $patternBoolean;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode
     */
    public function getPatternCode(): null|FHIRCode
    {
        return $this->patternCode;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode $patternCode
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternCode(null|string|FHIRCodePrimitive|FHIRCode $patternCode = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternCode && !($patternCode instanceof FHIRCode)) {
            $patternCode = new FHIRCode($patternCode);
        }
        $this->_trackValueSet($this->patternCode, $patternCode);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_CODE])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_CODE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_CODE][0] = $xmlLocation;
        $this->patternCode = $patternCode;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getPatternDate(): null|FHIRDate
    {
        return $this->patternDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $patternDate
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $patternDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternDate && !($patternDate instanceof FHIRDate)) {
            $patternDate = new FHIRDate($patternDate);
        }
        $this->_trackValueSet($this->patternDate, $patternDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE][0] = $xmlLocation;
        $this->patternDate = $patternDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getPatternDateTime(): null|FHIRDateTime
    {
        return $this->patternDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $patternDateTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $patternDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternDateTime && !($patternDateTime instanceof FHIRDateTime)) {
            $patternDateTime = new FHIRDateTime($patternDateTime);
        }
        $this->_trackValueSet($this->patternDateTime, $patternDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE_TIME][0] = $xmlLocation;
        $this->patternDateTime = $patternDateTime;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getPatternDecimal(): null|FHIRDecimal
    {
        return $this->patternDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $patternDecimal
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $patternDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternDecimal && !($patternDecimal instanceof FHIRDecimal)) {
            $patternDecimal = new FHIRDecimal($patternDecimal);
        }
        $this->_trackValueSet($this->patternDecimal, $patternDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_DECIMAL][0] = $xmlLocation;
        $this->patternDecimal = $patternDecimal;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getPatternId(): null|FHIRId
    {
        return $this->patternId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $patternId
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternId(null|string|FHIRIdPrimitive|FHIRId $patternId = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternId && !($patternId instanceof FHIRId)) {
            $patternId = new FHIRId($patternId);
        }
        $this->_trackValueSet($this->patternId, $patternId);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_ID])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_ID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_ID][0] = $xmlLocation;
        $this->patternId = $patternId;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getPatternInstant(): null|FHIRInstant
    {
        return $this->patternInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $patternInstant
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $patternInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternInstant && !($patternInstant instanceof FHIRInstant)) {
            $patternInstant = new FHIRInstant($patternInstant);
        }
        $this->_trackValueSet($this->patternInstant, $patternInstant);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_INSTANT])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_INSTANT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_INSTANT][0] = $xmlLocation;
        $this->patternInstant = $patternInstant;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getPatternInteger(): null|FHIRInteger
    {
        return $this->patternInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $patternInteger
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $patternInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternInteger && !($patternInteger instanceof FHIRInteger)) {
            $patternInteger = new FHIRInteger($patternInteger);
        }
        $this->_trackValueSet($this->patternInteger, $patternInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_INTEGER][0] = $xmlLocation;
        $this->patternInteger = $patternInteger;
        return $this;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown
     */
    public function getPatternMarkdown(): null|FHIRMarkdown
    {
        return $this->patternMarkdown;
    }

    /**
     * A string that may contain markdown syntax for optional processing by a mark down
     * presentation engine
     * Systems are not required to have markdown support, and there is considerable
     * variation in markdown syntax, so the text should be readable without markdown
     * processing. The preferred markdown syntax is described here:
     * http://daringfireball.net/projects/markdown/syntax (and tests here:
     * http://daringfireball.net/projects/downloads/MarkdownTest_1.0.zip)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown $patternMarkdown
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternMarkdown(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $patternMarkdown = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternMarkdown && !($patternMarkdown instanceof FHIRMarkdown)) {
            $patternMarkdown = new FHIRMarkdown($patternMarkdown);
        }
        $this->_trackValueSet($this->patternMarkdown, $patternMarkdown);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_MARKDOWN])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_MARKDOWN] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_MARKDOWN][0] = $xmlLocation;
        $this->patternMarkdown = $patternMarkdown;
        return $this;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid
     */
    public function getPatternOid(): null|FHIROid
    {
        return $this->patternOid;
    }

    /**
     * An OID represented as a URI
     * RFC 3001. See also ISO/IEC 8824:1990 €
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid $patternOid
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternOid(null|string|FHIROidPrimitive|FHIROid $patternOid = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternOid && !($patternOid instanceof FHIROid)) {
            $patternOid = new FHIROid($patternOid);
        }
        $this->_trackValueSet($this->patternOid, $patternOid);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_OID])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_OID] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_OID][0] = $xmlLocation;
        $this->patternOid = $patternOid;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getPatternPositiveInt(): null|FHIRPositiveInt
    {
        return $this->patternPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $patternPositiveInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternPositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $patternPositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternPositiveInt && !($patternPositiveInt instanceof FHIRPositiveInt)) {
            $patternPositiveInt = new FHIRPositiveInt($patternPositiveInt);
        }
        $this->_trackValueSet($this->patternPositiveInt, $patternPositiveInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_POSITIVE_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_POSITIVE_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_POSITIVE_INT][0] = $xmlLocation;
        $this->patternPositiveInt = $patternPositiveInt;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPatternString(): null|FHIRString
    {
        return $this->patternString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $patternString
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternString(null|string|FHIRStringPrimitive|FHIRString $patternString = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternString && !($patternString instanceof FHIRString)) {
            $patternString = new FHIRString($patternString);
        }
        $this->_trackValueSet($this->patternString, $patternString);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_STRING])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_STRING] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_STRING][0] = $xmlLocation;
        $this->patternString = $patternString;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getPatternTime(): null|FHIRTime
    {
        return $this->patternTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $patternTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $patternTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternTime && !($patternTime instanceof FHIRTime)) {
            $patternTime = new FHIRTime($patternTime);
        }
        $this->_trackValueSet($this->patternTime, $patternTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_TIME][0] = $xmlLocation;
        $this->patternTime = $patternTime;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getPatternUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->patternUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $patternUnsignedInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternUnsignedInt && !($patternUnsignedInt instanceof FHIRUnsignedInt)) {
            $patternUnsignedInt = new FHIRUnsignedInt($patternUnsignedInt);
        }
        $this->_trackValueSet($this->patternUnsignedInt, $patternUnsignedInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_UNSIGNED_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_UNSIGNED_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_UNSIGNED_INT][0] = $xmlLocation;
        $this->patternUnsignedInt = $patternUnsignedInt;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri
     */
    public function getPatternUri(): null|FHIRUri
    {
        return $this->patternUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $patternUri
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPatternUri(null|string|FHIRUriPrimitive|FHIRUri $patternUri = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $patternUri && !($patternUri instanceof FHIRUri)) {
            $patternUri = new FHIRUri($patternUri);
        }
        $this->_trackValueSet($this->patternUri, $patternUri);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PATTERN_URI])) {
            $this->_primitiveXmlLocations[self::FIELD_PATTERN_URI] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PATTERN_URI][0] = $xmlLocation;
        $this->patternUri = $patternUri;
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress
     */
    public function getPatternAddress(): null|FHIRAddress
    {
        return $this->patternAddress;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress $patternAddress
     * @return static
     */
    public function setPatternAddress(null|FHIRAddress $patternAddress = null): self
    {
        if (null === $patternAddress) {
            $patternAddress = new FHIRAddress();
        }
        $this->_trackValueSet($this->patternAddress, $patternAddress);
        $this->patternAddress = $patternAddress;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getPatternAge(): null|FHIRAge
    {
        return $this->patternAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge $patternAge
     * @return static
     */
    public function setPatternAge(null|FHIRAge $patternAge = null): self
    {
        if (null === $patternAge) {
            $patternAge = new FHIRAge();
        }
        $this->_trackValueSet($this->patternAge, $patternAge);
        $this->patternAge = $patternAge;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation
     */
    public function getPatternAnnotation(): null|FHIRAnnotation
    {
        return $this->patternAnnotation;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation $patternAnnotation
     * @return static
     */
    public function setPatternAnnotation(null|FHIRAnnotation $patternAnnotation = null): self
    {
        if (null === $patternAnnotation) {
            $patternAnnotation = new FHIRAnnotation();
        }
        $this->_trackValueSet($this->patternAnnotation, $patternAnnotation);
        $this->patternAnnotation = $patternAnnotation;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment
     */
    public function getPatternAttachment(): null|FHIRAttachment
    {
        return $this->patternAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment $patternAttachment
     * @return static
     */
    public function setPatternAttachment(null|FHIRAttachment $patternAttachment = null): self
    {
        if (null === $patternAttachment) {
            $patternAttachment = new FHIRAttachment();
        }
        $this->_trackValueSet($this->patternAttachment, $patternAttachment);
        $this->patternAttachment = $patternAttachment;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getPatternCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->patternCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
     * @return static
     */
    public function setPatternCodeableConcept(null|FHIRCodeableConcept $patternCodeableConcept = null): self
    {
        if (null === $patternCodeableConcept) {
            $patternCodeableConcept = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->patternCodeableConcept, $patternCodeableConcept);
        $this->patternCodeableConcept = $patternCodeableConcept;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding
     */
    public function getPatternCoding(): null|FHIRCoding
    {
        return $this->patternCoding;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding $patternCoding
     * @return static
     */
    public function setPatternCoding(null|FHIRCoding $patternCoding = null): self
    {
        if (null === $patternCoding) {
            $patternCoding = new FHIRCoding();
        }
        $this->_trackValueSet($this->patternCoding, $patternCoding);
        $this->patternCoding = $patternCoding;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint
     */
    public function getPatternContactPoint(): null|FHIRContactPoint
    {
        return $this->patternContactPoint;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint $patternContactPoint
     * @return static
     */
    public function setPatternContactPoint(null|FHIRContactPoint $patternContactPoint = null): self
    {
        if (null === $patternContactPoint) {
            $patternContactPoint = new FHIRContactPoint();
        }
        $this->_trackValueSet($this->patternContactPoint, $patternContactPoint);
        $this->patternContactPoint = $patternContactPoint;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount
     */
    public function getPatternCount(): null|FHIRCount
    {
        return $this->patternCount;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount $patternCount
     * @return static
     */
    public function setPatternCount(null|FHIRCount $patternCount = null): self
    {
        if (null === $patternCount) {
            $patternCount = new FHIRCount();
        }
        $this->_trackValueSet($this->patternCount, $patternCount);
        $this->patternCount = $patternCount;
        return $this;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance
     */
    public function getPatternDistance(): null|FHIRDistance
    {
        return $this->patternDistance;
    }

    /**
     * A length - a value with a unit that is a physical distance.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance $patternDistance
     * @return static
     */
    public function setPatternDistance(null|FHIRDistance $patternDistance = null): self
    {
        if (null === $patternDistance) {
            $patternDistance = new FHIRDistance();
        }
        $this->_trackValueSet($this->patternDistance, $patternDistance);
        $this->patternDistance = $patternDistance;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getPatternDuration(): null|FHIRDuration
    {
        return $this->patternDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $patternDuration
     * @return static
     */
    public function setPatternDuration(null|FHIRDuration $patternDuration = null): self
    {
        if (null === $patternDuration) {
            $patternDuration = new FHIRDuration();
        }
        $this->_trackValueSet($this->patternDuration, $patternDuration);
        $this->patternDuration = $patternDuration;
        return $this;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName
     */
    public function getPatternHumanName(): null|FHIRHumanName
    {
        return $this->patternHumanName;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName $patternHumanName
     * @return static
     */
    public function setPatternHumanName(null|FHIRHumanName $patternHumanName = null): self
    {
        if (null === $patternHumanName) {
            $patternHumanName = new FHIRHumanName();
        }
        $this->_trackValueSet($this->patternHumanName, $patternHumanName);
        $this->patternHumanName = $patternHumanName;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier
     */
    public function getPatternIdentifier(): null|FHIRIdentifier
    {
        return $this->patternIdentifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier $patternIdentifier
     * @return static
     */
    public function setPatternIdentifier(null|FHIRIdentifier $patternIdentifier = null): self
    {
        if (null === $patternIdentifier) {
            $patternIdentifier = new FHIRIdentifier();
        }
        $this->_trackValueSet($this->patternIdentifier, $patternIdentifier);
        $this->patternIdentifier = $patternIdentifier;
        return $this;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney
     */
    public function getPatternMoney(): null|FHIRMoney
    {
        return $this->patternMoney;
    }

    /**
     * An amount of economic utility in some recognized currency.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney $patternMoney
     * @return static
     */
    public function setPatternMoney(null|FHIRMoney $patternMoney = null): self
    {
        if (null === $patternMoney) {
            $patternMoney = new FHIRMoney();
        }
        $this->_trackValueSet($this->patternMoney, $patternMoney);
        $this->patternMoney = $patternMoney;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod
     */
    public function getPatternPeriod(): null|FHIRPeriod
    {
        return $this->patternPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod $patternPeriod
     * @return static
     */
    public function setPatternPeriod(null|FHIRPeriod $patternPeriod = null): self
    {
        if (null === $patternPeriod) {
            $patternPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->patternPeriod, $patternPeriod);
        $this->patternPeriod = $patternPeriod;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getPatternQuantity(): null|FHIRQuantity
    {
        return $this->patternQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $patternQuantity
     * @return static
     */
    public function setPatternQuantity(null|FHIRQuantity $patternQuantity = null): self
    {
        if (null === $patternQuantity) {
            $patternQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->patternQuantity, $patternQuantity);
        $this->patternQuantity = $patternQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getPatternRange(): null|FHIRRange
    {
        return $this->patternRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $patternRange
     * @return static
     */
    public function setPatternRange(null|FHIRRange $patternRange = null): self
    {
        if (null === $patternRange) {
            $patternRange = new FHIRRange();
        }
        $this->_trackValueSet($this->patternRange, $patternRange);
        $this->patternRange = $patternRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio
     */
    public function getPatternRatio(): null|FHIRRatio
    {
        return $this->patternRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio $patternRatio
     * @return static
     */
    public function setPatternRatio(null|FHIRRatio $patternRatio = null): self
    {
        if (null === $patternRatio) {
            $patternRatio = new FHIRRatio();
        }
        $this->_trackValueSet($this->patternRatio, $patternRatio);
        $this->patternRatio = $patternRatio;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getPatternReference(): null|FHIRReference
    {
        return $this->patternReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $patternReference
     * @return static
     */
    public function setPatternReference(null|FHIRReference $patternReference = null): self
    {
        if (null === $patternReference) {
            $patternReference = new FHIRReference();
        }
        $this->_trackValueSet($this->patternReference, $patternReference);
        $this->patternReference = $patternReference;
        return $this;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData
     */
    public function getPatternSampledData(): null|FHIRSampledData
    {
        return $this->patternSampledData;
    }

    /**
     * A series of measurements taken by a device, with upper and lower limits. There
     * may be more than one dimension in the data.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData $patternSampledData
     * @return static
     */
    public function setPatternSampledData(null|FHIRSampledData $patternSampledData = null): self
    {
        if (null === $patternSampledData) {
            $patternSampledData = new FHIRSampledData();
        }
        $this->_trackValueSet($this->patternSampledData, $patternSampledData);
        $this->patternSampledData = $patternSampledData;
        return $this;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature
     */
    public function getPatternSignature(): null|FHIRSignature
    {
        return $this->patternSignature;
    }

    /**
     * A digital signature along with supporting context. The signature may be
     * electronic/cryptographic in nature, or a graphical image representing a
     * hand-written signature, or a signature process. Different signature approaches
     * have different utilities.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature $patternSignature
     * @return static
     */
    public function setPatternSignature(null|FHIRSignature $patternSignature = null): self
    {
        if (null === $patternSignature) {
            $patternSignature = new FHIRSignature();
        }
        $this->_trackValueSet($this->patternSignature, $patternSignature);
        $this->patternSignature = $patternSignature;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming
     */
    public function getPatternTiming(): null|FHIRTiming
    {
        return $this->patternTiming;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming $patternTiming
     * @return static
     */
    public function setPatternTiming(null|FHIRTiming $patternTiming = null): self
    {
        if (null === $patternTiming) {
            $patternTiming = new FHIRTiming();
        }
        $this->_trackValueSet($this->patternTiming, $patternTiming);
        $this->patternTiming = $patternTiming;
        return $this;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta
     */
    public function getPatternMeta(): null|FHIRMeta
    {
        return $this->patternMeta;
    }

    /**
     * The metadata about a resource. This is content in the resource that is
     * maintained by the infrastructure. Changes to the content may not always be
     * associated with version changes to the resource.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specifies a value that the value in the instance SHALL follow - that is, any
     * value in the pattern must be found in the instance. Other additional values may
     * be found too. This is effectively constraint by example. The values of elements
     * present in the pattern must match exactly (case-sensitive, accent-sensitive,
     * etc.).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta $patternMeta
     * @return static
     */
    public function setPatternMeta(null|FHIRMeta $patternMeta = null): self
    {
        if (null === $patternMeta) {
            $patternMeta = new FHIRMeta();
        }
        $this->_trackValueSet($this->patternMeta, $patternMeta);
        $this->patternMeta = $patternMeta;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample[]
     */
    public function getExample(): null|array
    {
        return $this->example;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A sample value for this element demonstrating the type of information that would
     * typically be found in the element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample $example
     * @return static
     */
    public function addExample(null|FHIRElementDefinitionExample $example = null): self
    {
        if (null === $example) {
            $example = new FHIRElementDefinitionExample();
        }
        $this->_trackValueAdded();
        $this->example[] = $example;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getMinValueDate(): null|FHIRDate
    {
        return $this->minValueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $minValueDate
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $minValueDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $minValueDate && !($minValueDate instanceof FHIRDate)) {
            $minValueDate = new FHIRDate($minValueDate);
        }
        $this->_trackValueSet($this->minValueDate, $minValueDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE][0] = $xmlLocation;
        $this->minValueDate = $minValueDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getMinValueDateTime(): null|FHIRDateTime
    {
        return $this->minValueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $minValueDateTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $minValueDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $minValueDateTime && !($minValueDateTime instanceof FHIRDateTime)) {
            $minValueDateTime = new FHIRDateTime($minValueDateTime);
        }
        $this->_trackValueSet($this->minValueDateTime, $minValueDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE_TIME][0] = $xmlLocation;
        $this->minValueDateTime = $minValueDateTime;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getMinValueInstant(): null|FHIRInstant
    {
        return $this->minValueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $minValueInstant
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $minValueInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $minValueInstant && !($minValueInstant instanceof FHIRInstant)) {
            $minValueInstant = new FHIRInstant($minValueInstant);
        }
        $this->_trackValueSet($this->minValueInstant, $minValueInstant);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INSTANT])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INSTANT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INSTANT][0] = $xmlLocation;
        $this->minValueInstant = $minValueInstant;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getMinValueTime(): null|FHIRTime
    {
        return $this->minValueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $minValueTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $minValueTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $minValueTime && !($minValueTime instanceof FHIRTime)) {
            $minValueTime = new FHIRTime($minValueTime);
        }
        $this->_trackValueSet($this->minValueTime, $minValueTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_TIME][0] = $xmlLocation;
        $this->minValueTime = $minValueTime;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getMinValueDecimal(): null|FHIRDecimal
    {
        return $this->minValueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $minValueDecimal
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $minValueDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $minValueDecimal && !($minValueDecimal instanceof FHIRDecimal)) {
            $minValueDecimal = new FHIRDecimal($minValueDecimal);
        }
        $this->_trackValueSet($this->minValueDecimal, $minValueDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DECIMAL][0] = $xmlLocation;
        $this->minValueDecimal = $minValueDecimal;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getMinValueInteger(): null|FHIRInteger
    {
        return $this->minValueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $minValueInteger
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $minValueInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $minValueInteger && !($minValueInteger instanceof FHIRInteger)) {
            $minValueInteger = new FHIRInteger($minValueInteger);
        }
        $this->_trackValueSet($this->minValueInteger, $minValueInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INTEGER][0] = $xmlLocation;
        $this->minValueInteger = $minValueInteger;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getMinValuePositiveInt(): null|FHIRPositiveInt
    {
        return $this->minValuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $minValuePositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $minValuePositiveInt && !($minValuePositiveInt instanceof FHIRPositiveInt)) {
            $minValuePositiveInt = new FHIRPositiveInt($minValuePositiveInt);
        }
        $this->_trackValueSet($this->minValuePositiveInt, $minValuePositiveInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_POSITIVE_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_POSITIVE_INT][0] = $xmlLocation;
        $this->minValuePositiveInt = $minValuePositiveInt;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getMinValueUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->minValueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMinValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $minValueUnsignedInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $minValueUnsignedInt && !($minValueUnsignedInt instanceof FHIRUnsignedInt)) {
            $minValueUnsignedInt = new FHIRUnsignedInt($minValueUnsignedInt);
        }
        $this->_trackValueSet($this->minValueUnsignedInt, $minValueUnsignedInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_UNSIGNED_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_UNSIGNED_INT][0] = $xmlLocation;
        $this->minValueUnsignedInt = $minValueUnsignedInt;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getMinValueQuantity(): null|FHIRQuantity
    {
        return $this->minValueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The minimum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $minValueQuantity
     * @return static
     */
    public function setMinValueQuantity(null|FHIRQuantity $minValueQuantity = null): self
    {
        if (null === $minValueQuantity) {
            $minValueQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->minValueQuantity, $minValueQuantity);
        $this->minValueQuantity = $minValueQuantity;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate
     */
    public function getMaxValueDate(): null|FHIRDate
    {
        return $this->maxValueDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate $maxValueDate
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxValueDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $maxValueDate = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxValueDate && !($maxValueDate instanceof FHIRDate)) {
            $maxValueDate = new FHIRDate($maxValueDate);
        }
        $this->_trackValueSet($this->maxValueDate, $maxValueDate);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE][0] = $xmlLocation;
        $this->maxValueDate = $maxValueDate;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime
     */
    public function getMaxValueDateTime(): null|FHIRDateTime
    {
        return $this->maxValueDateTime;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime $maxValueDateTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxValueDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $maxValueDateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxValueDateTime && !($maxValueDateTime instanceof FHIRDateTime)) {
            $maxValueDateTime = new FHIRDateTime($maxValueDateTime);
        }
        $this->_trackValueSet($this->maxValueDateTime, $maxValueDateTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE_TIME][0] = $xmlLocation;
        $this->maxValueDateTime = $maxValueDateTime;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant
     */
    public function getMaxValueInstant(): null|FHIRInstant
    {
        return $this->maxValueInstant;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant $maxValueInstant
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxValueInstant(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $maxValueInstant = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxValueInstant && !($maxValueInstant instanceof FHIRInstant)) {
            $maxValueInstant = new FHIRInstant($maxValueInstant);
        }
        $this->_trackValueSet($this->maxValueInstant, $maxValueInstant);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INSTANT])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INSTANT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INSTANT][0] = $xmlLocation;
        $this->maxValueInstant = $maxValueInstant;
        return $this;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime
     */
    public function getMaxValueTime(): null|FHIRTime
    {
        return $this->maxValueTime;
    }

    /**
     * A time during the day, with no date specified
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\STU3\FHIRTimePrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime $maxValueTime
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxValueTime(null|string|\DateTimeInterface|FHIRTimePrimitive|FHIRTime $maxValueTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxValueTime && !($maxValueTime instanceof FHIRTime)) {
            $maxValueTime = new FHIRTime($maxValueTime);
        }
        $this->_trackValueSet($this->maxValueTime, $maxValueTime);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_TIME])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_TIME] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_TIME][0] = $xmlLocation;
        $this->maxValueTime = $maxValueTime;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal
     */
    public function getMaxValueDecimal(): null|FHIRDecimal
    {
        return $this->maxValueDecimal;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal $maxValueDecimal
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxValueDecimal(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $maxValueDecimal = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxValueDecimal && !($maxValueDecimal instanceof FHIRDecimal)) {
            $maxValueDecimal = new FHIRDecimal($maxValueDecimal);
        }
        $this->_trackValueSet($this->maxValueDecimal, $maxValueDecimal);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DECIMAL])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DECIMAL] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DECIMAL][0] = $xmlLocation;
        $this->maxValueDecimal = $maxValueDecimal;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getMaxValueInteger(): null|FHIRInteger
    {
        return $this->maxValueInteger;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $maxValueInteger
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxValueInteger(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxValueInteger = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxValueInteger && !($maxValueInteger instanceof FHIRInteger)) {
            $maxValueInteger = new FHIRInteger($maxValueInteger);
        }
        $this->_trackValueSet($this->maxValueInteger, $maxValueInteger);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INTEGER])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INTEGER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INTEGER][0] = $xmlLocation;
        $this->maxValueInteger = $maxValueInteger;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getMaxValuePositiveInt(): null|FHIRPositiveInt
    {
        return $this->maxValuePositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxValuePositiveInt(null|string|int|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $maxValuePositiveInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxValuePositiveInt && !($maxValuePositiveInt instanceof FHIRPositiveInt)) {
            $maxValuePositiveInt = new FHIRPositiveInt($maxValuePositiveInt);
        }
        $this->_trackValueSet($this->maxValuePositiveInt, $maxValuePositiveInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_POSITIVE_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_POSITIVE_INT][0] = $xmlLocation;
        $this->maxValuePositiveInt = $maxValuePositiveInt;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt
     */
    public function getMaxValueUnsignedInt(): null|FHIRUnsignedInt
    {
        return $this->maxValueUnsignedInt;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxValueUnsignedInt(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $maxValueUnsignedInt = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxValueUnsignedInt && !($maxValueUnsignedInt instanceof FHIRUnsignedInt)) {
            $maxValueUnsignedInt = new FHIRUnsignedInt($maxValueUnsignedInt);
        }
        $this->_trackValueSet($this->maxValueUnsignedInt, $maxValueUnsignedInt);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_UNSIGNED_INT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_UNSIGNED_INT][0] = $xmlLocation;
        $this->maxValueUnsignedInt = $maxValueUnsignedInt;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity
     */
    public function getMaxValueQuantity(): null|FHIRQuantity
    {
        return $this->maxValueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum allowed value for the element. The value is inclusive. This is
     * allowed for the types date, dateTime, instant, time, decimal, integer, and
     * Quantity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity $maxValueQuantity
     * @return static
     */
    public function setMaxValueQuantity(null|FHIRQuantity $maxValueQuantity = null): self
    {
        if (null === $maxValueQuantity) {
            $maxValueQuantity = new FHIRQuantity();
        }
        $this->_trackValueSet($this->maxValueQuantity, $maxValueQuantity);
        $this->maxValueQuantity = $maxValueQuantity;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the maximum length in characters that is permitted to be present in
     * conformant instances and which is expected to be supported by conformant
     * consumers that support the element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getMaxLength(): null|FHIRInteger
    {
        return $this->maxLength;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the maximum length in characters that is permitted to be present in
     * conformant instances and which is expected to be supported by conformant
     * consumers that support the element.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $maxLength
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMaxLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $maxLength && !($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger($maxLength);
        }
        $this->_trackValueSet($this->maxLength, $maxLength);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH])) {
            $this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH][0] = $xmlLocation;
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId[]
     */
    public function getCondition(): null|array
    {
        return $this->condition;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $condition
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addCondition(null|string|FHIRIdPrimitive|FHIRId $condition = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $condition && !($condition instanceof FHIRId)) {
            $condition = new FHIRId($condition);
        }
        $this->_trackValueAdded();
        if (!isset($this->_primitiveXmlLocations[self::FIELD_CONDITION])) {
            $this->_primitiveXmlLocations[self::FIELD_CONDITION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_CONDITION][] = $xmlLocation;
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to an invariant that may make additional statements about the
     * cardinality or value in the instance.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId[] $condition
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCondition(array $condition = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        unset($this->_primitiveXmlLocations[self::FIELD_CONDITION]);
        if ([] !== $this->condition) {
            $this->_trackValuesRemoved(count($this->condition));
            $this->condition = [];
        }
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRId) {
                $this->addCondition($v, $xmlLocation);
            } else {
                $this->addCondition(new FHIRId($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public function getConstraint(): null|array
    {
        return $this->constraint;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Formal constraints such as co-occurrence and other constraints that can be
     * computationally evaluated within the context of the instance.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint $constraint
     * @return static
     */
    public function addConstraint(null|FHIRElementDefinitionConstraint $constraint = null): self
    {
        if (null === $constraint) {
            $constraint = new FHIRElementDefinitionConstraint();
        }
        $this->_trackValueAdded();
        $this->constraint[] = $constraint;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, implementations that produce or consume resources SHALL provide
     * "support" for the element in some meaningful way. If false, the element may be
     * ignored and not supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getMustSupport(): null|FHIRBoolean
    {
        return $this->mustSupport;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, implementations that produce or consume resources SHALL provide
     * "support" for the element in some meaningful way. If false, the element may be
     * ignored and not supported.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $mustSupport
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setMustSupport(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $mustSupport = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $mustSupport && !($mustSupport instanceof FHIRBoolean)) {
            $mustSupport = new FHIRBoolean($mustSupport);
        }
        $this->_trackValueSet($this->mustSupport, $mustSupport);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MUST_SUPPORT])) {
            $this->_primitiveXmlLocations[self::FIELD_MUST_SUPPORT] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MUST_SUPPORT][0] = $xmlLocation;
        $this->mustSupport = $mustSupport;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, the value of this element affects the interpretation of the element or
     * resource that contains it, and the value of the element cannot be ignored.
     * Typically, this is used for status, negation and qualification codes. The effect
     * of this is that the element cannot be ignored by systems: they SHALL either
     * recognize the element and process it, and/or a pre-determination has been made
     * that it is not relevant to their particular system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getIsModifier(): null|FHIRBoolean
    {
        return $this->isModifier;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, the value of this element affects the interpretation of the element or
     * resource that contains it, and the value of the element cannot be ignored.
     * Typically, this is used for status, negation and qualification codes. The effect
     * of this is that the element cannot be ignored by systems: they SHALL either
     * recognize the element and process it, and/or a pre-determination has been made
     * that it is not relevant to their particular system.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $isModifier
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIsModifier(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isModifier = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $isModifier && !($isModifier instanceof FHIRBoolean)) {
            $isModifier = new FHIRBoolean($isModifier);
        }
        $this->_trackValueSet($this->isModifier, $isModifier);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_IS_MODIFIER])) {
            $this->_primitiveXmlLocations[self::FIELD_IS_MODIFIER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_IS_MODIFIER][0] = $xmlLocation;
        $this->isModifier = $isModifier;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the element should be included if a client requests a search with the
     * parameter _summary=true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getIsSummary(): null|FHIRBoolean
    {
        return $this->isSummary;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the element should be included if a client requests a search with the
     * parameter _summary=true.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $isSummary
     * @param \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setIsSummary(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $isSummary = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $isSummary && !($isSummary instanceof FHIRBoolean)) {
            $isSummary = new FHIRBoolean($isSummary);
        }
        $this->_trackValueSet($this->isSummary, $isSummary);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_IS_SUMMARY])) {
            $this->_primitiveXmlLocations[self::FIELD_IS_SUMMARY] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_IS_SUMMARY][0] = $xmlLocation;
        $this->isSummary = $isSummary;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
     * Quantity), or the data types (string, uri).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function getBinding(): null|FHIRElementDefinitionBinding
    {
        return $this->binding;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept,
     * Quantity), or the data types (string, uri).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     * @return static
     */
    public function setBinding(null|FHIRElementDefinitionBinding $binding = null): self
    {
        if (null === $binding) {
            $binding = new FHIRElementDefinitionBinding();
        }
        $this->_trackValueSet($this->binding, $binding);
        $this->binding = $binding;
        return $this;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public function getMapping(): null|array
    {
        return $this->mapping;
    }

    /**
     * Captures constraints on each element within the resource, profile, or extension.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a concept from an external specification that roughly corresponds to
     * this element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping $mapping
     * @return static
     */
    public function addMapping(null|FHIRElementDefinitionMapping $mapping = null): self
    {
        if (null === $mapping) {
            $mapping = new FHIRElementDefinitionMapping();
        }
        $this->_trackValueAdded();
        $this->mapping[] = $mapping;
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
        if (null !== ($v = $this->getPath())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATH] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPRESENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSliceName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SLICE_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LABEL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSlicing())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SLICING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getShort())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SHORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIREMENTS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAlias())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ALIAS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMin())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMax())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBase())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContentReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_MARKDOWN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_ANNOTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DISTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFAULT_VALUE_META] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeaningWhenMissing())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEANING_WHEN_MISSING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrderMeaning())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDER_MEANING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedMarkdown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_MARKDOWN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedAnnotation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_ANNOTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDistance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DISTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFixedMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIXED_META] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternBase64Binary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_BASE_64BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternMarkdown())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_MARKDOWN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternOid())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_OID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternPositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternAddress())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_ADDRESS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternAnnotation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_ANNOTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_ATTACHMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternCoding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_CODING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternContactPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_CONTACT_POINT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDistance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DISTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternHumanName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_HUMAN_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternMoney())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_MONEY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternSampledData())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_SAMPLED_DATA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternSignature())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_SIGNATURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_TIMING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatternMeta())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATTERN_META] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getExample())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EXAMPLE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMinValueDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValuePositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMinValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MIN_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueInstant())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_INSTANT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueDecimal())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_DECIMAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueInteger())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_INTEGER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValuePositiveInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_POSITIVE_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueUnsignedInt())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_UNSIGNED_INT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxValueQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_VALUE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_LENGTH] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONSTRAINT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMustSupport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MUST_SUPPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_MODIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIsSummary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IS_SUMMARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBinding())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINDING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMapping())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MAPPING, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATH])) {
            $v = $this->getPath();
            foreach($validationRules[self::FIELD_PATH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATH])) {
                        $errs[self::FIELD_PATH] = [];
                    }
                    $errs[self::FIELD_PATH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPRESENTATION])) {
            $v = $this->getRepresentation();
            foreach($validationRules[self::FIELD_REPRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_REPRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPRESENTATION])) {
                        $errs[self::FIELD_REPRESENTATION] = [];
                    }
                    $errs[self::FIELD_REPRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SLICE_NAME])) {
            $v = $this->getSliceName();
            foreach($validationRules[self::FIELD_SLICE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_SLICE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SLICE_NAME])) {
                        $errs[self::FIELD_SLICE_NAME] = [];
                    }
                    $errs[self::FIELD_SLICE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LABEL])) {
            $v = $this->getLabel();
            foreach($validationRules[self::FIELD_LABEL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_LABEL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LABEL])) {
                        $errs[self::FIELD_LABEL] = [];
                    }
                    $errs[self::FIELD_LABEL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SLICING])) {
            $v = $this->getSlicing();
            foreach($validationRules[self::FIELD_SLICING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_SLICING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SLICING])) {
                        $errs[self::FIELD_SLICING] = [];
                    }
                    $errs[self::FIELD_SLICING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHORT])) {
            $v = $this->getShort();
            foreach($validationRules[self::FIELD_SHORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_SHORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHORT])) {
                        $errs[self::FIELD_SHORT] = [];
                    }
                    $errs[self::FIELD_SHORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMMENT])) {
            $v = $this->getComment();
            foreach($validationRules[self::FIELD_COMMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_COMMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMMENT])) {
                        $errs[self::FIELD_COMMENT] = [];
                    }
                    $errs[self::FIELD_COMMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIREMENTS])) {
            $v = $this->getRequirements();
            foreach($validationRules[self::FIELD_REQUIREMENTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_REQUIREMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIREMENTS])) {
                        $errs[self::FIELD_REQUIREMENTS] = [];
                    }
                    $errs[self::FIELD_REQUIREMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALIAS])) {
            $v = $this->getAlias();
            foreach($validationRules[self::FIELD_ALIAS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_ALIAS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALIAS])) {
                        $errs[self::FIELD_ALIAS] = [];
                    }
                    $errs[self::FIELD_ALIAS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN])) {
            $v = $this->getMin();
            foreach($validationRules[self::FIELD_MIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN])) {
                        $errs[self::FIELD_MIN] = [];
                    }
                    $errs[self::FIELD_MIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX])) {
            $v = $this->getMax();
            foreach($validationRules[self::FIELD_MAX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX])) {
                        $errs[self::FIELD_MAX] = [];
                    }
                    $errs[self::FIELD_MAX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASE])) {
            $v = $this->getBase();
            foreach($validationRules[self::FIELD_BASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_BASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE])) {
                        $errs[self::FIELD_BASE] = [];
                    }
                    $errs[self::FIELD_BASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT_REFERENCE])) {
            $v = $this->getContentReference();
            foreach($validationRules[self::FIELD_CONTENT_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_CONTENT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT_REFERENCE])) {
                        $errs[self::FIELD_CONTENT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CONTENT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $v = $this->getDefaultValueBase64Binary();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
                        $errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            $v = $this->getDefaultValueBoolean();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
                        $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODE])) {
            $v = $this->getDefaultValueCode();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CODE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DATE])) {
            $v = $this->getDefaultValueDate();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DATE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DATE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            $v = $this->getDefaultValueDateTime();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            $v = $this->getDefaultValueDecimal();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ID])) {
            $v = $this->getDefaultValueId();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ID])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ID] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $v = $this->getDefaultValueInstant();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_INSTANT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_INSTANT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            $v = $this->getDefaultValueInteger();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_INTEGER])) {
                        $errs[self::FIELD_DEFAULT_VALUE_INTEGER] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            $v = $this->getDefaultValueMarkdown();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_MARKDOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
                        $errs[self::FIELD_DEFAULT_VALUE_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_OID])) {
            $v = $this->getDefaultValueOid();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_OID])) {
                        $errs[self::FIELD_DEFAULT_VALUE_OID] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $v = $this->getDefaultValuePositiveInt();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_STRING])) {
            $v = $this->getDefaultValueString();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_STRING])) {
                        $errs[self::FIELD_DEFAULT_VALUE_STRING] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_TIME])) {
            $v = $this->getDefaultValueTime();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_TIME])) {
                        $errs[self::FIELD_DEFAULT_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $v = $this->getDefaultValueUnsignedInt();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_URI])) {
            $v = $this->getDefaultValueUri();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_URI])) {
                        $errs[self::FIELD_DEFAULT_VALUE_URI] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
            $v = $this->getDefaultValueAddress();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ADDRESS])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ADDRESS] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_AGE])) {
            $v = $this->getDefaultValueAge();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_AGE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_AGE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ANNOTATION])) {
            $v = $this->getDefaultValueAnnotation();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ANNOTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_ANNOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ANNOTATION])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ANNOTATION] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ANNOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_ATTACHMENT])) {
            $v = $this->getDefaultValueAttachment();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT])) {
            $v = $this->getDefaultValueCodeableConcept();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CODING])) {
            $v = $this->getDefaultValueCoding();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CODING])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CODING] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
            $v = $this->getDefaultValueContactPoint();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_CONTACT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_CONTACT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_COUNT])) {
            $v = $this->getDefaultValueCount();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_COUNT])) {
                        $errs[self::FIELD_DEFAULT_VALUE_COUNT] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
            $v = $this->getDefaultValueDistance();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DISTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DISTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DISTANCE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DISTANCE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DISTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_DURATION])) {
            $v = $this->getDefaultValueDuration();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_DURATION])) {
                        $errs[self::FIELD_DEFAULT_VALUE_DURATION] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
            $v = $this->getDefaultValueHumanName();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME])) {
                        $errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
            $v = $this->getDefaultValueIdentifier();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER])) {
                        $errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_MONEY])) {
            $v = $this->getDefaultValueMoney();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_MONEY])) {
                        $errs[self::FIELD_DEFAULT_VALUE_MONEY] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_PERIOD])) {
            $v = $this->getDefaultValuePeriod();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_PERIOD])) {
                        $errs[self::FIELD_DEFAULT_VALUE_PERIOD] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
            $v = $this->getDefaultValueQuantity();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_QUANTITY])) {
                        $errs[self::FIELD_DEFAULT_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_RANGE])) {
            $v = $this->getDefaultValueRange();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_RANGE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_RANGE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_RATIO])) {
            $v = $this->getDefaultValueRatio();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_RATIO])) {
                        $errs[self::FIELD_DEFAULT_VALUE_RATIO] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_REFERENCE])) {
            $v = $this->getDefaultValueReference();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_REFERENCE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA])) {
            $v = $this->getDefaultValueSampledData();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA])) {
                        $errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_SIGNATURE])) {
            $v = $this->getDefaultValueSignature();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_SIGNATURE])) {
                        $errs[self::FIELD_DEFAULT_VALUE_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_TIMING])) {
            $v = $this->getDefaultValueTiming();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_TIMING])) {
                        $errs[self::FIELD_DEFAULT_VALUE_TIMING] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFAULT_VALUE_META])) {
            $v = $this->getDefaultValueMeta();
            foreach($validationRules[self::FIELD_DEFAULT_VALUE_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_DEFAULT_VALUE_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFAULT_VALUE_META])) {
                        $errs[self::FIELD_DEFAULT_VALUE_META] = [];
                    }
                    $errs[self::FIELD_DEFAULT_VALUE_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEANING_WHEN_MISSING])) {
            $v = $this->getMeaningWhenMissing();
            foreach($validationRules[self::FIELD_MEANING_WHEN_MISSING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MEANING_WHEN_MISSING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEANING_WHEN_MISSING])) {
                        $errs[self::FIELD_MEANING_WHEN_MISSING] = [];
                    }
                    $errs[self::FIELD_MEANING_WHEN_MISSING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORDER_MEANING])) {
            $v = $this->getOrderMeaning();
            foreach($validationRules[self::FIELD_ORDER_MEANING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_ORDER_MEANING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORDER_MEANING])) {
                        $errs[self::FIELD_ORDER_MEANING] = [];
                    }
                    $errs[self::FIELD_ORDER_MEANING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_BASE_64BINARY])) {
            $v = $this->getFixedBase64Binary();
            foreach($validationRules[self::FIELD_FIXED_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_BASE_64BINARY])) {
                        $errs[self::FIELD_FIXED_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_FIXED_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_BOOLEAN])) {
            $v = $this->getFixedBoolean();
            foreach($validationRules[self::FIELD_FIXED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_BOOLEAN])) {
                        $errs[self::FIELD_FIXED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_FIXED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_CODE])) {
            $v = $this->getFixedCode();
            foreach($validationRules[self::FIELD_FIXED_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_CODE])) {
                        $errs[self::FIELD_FIXED_CODE] = [];
                    }
                    $errs[self::FIELD_FIXED_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DATE])) {
            $v = $this->getFixedDate();
            foreach($validationRules[self::FIELD_FIXED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DATE])) {
                        $errs[self::FIELD_FIXED_DATE] = [];
                    }
                    $errs[self::FIELD_FIXED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DATE_TIME])) {
            $v = $this->getFixedDateTime();
            foreach($validationRules[self::FIELD_FIXED_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DATE_TIME])) {
                        $errs[self::FIELD_FIXED_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_FIXED_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DECIMAL])) {
            $v = $this->getFixedDecimal();
            foreach($validationRules[self::FIELD_FIXED_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DECIMAL])) {
                        $errs[self::FIELD_FIXED_DECIMAL] = [];
                    }
                    $errs[self::FIELD_FIXED_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ID])) {
            $v = $this->getFixedId();
            foreach($validationRules[self::FIELD_FIXED_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ID])) {
                        $errs[self::FIELD_FIXED_ID] = [];
                    }
                    $errs[self::FIELD_FIXED_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_INSTANT])) {
            $v = $this->getFixedInstant();
            foreach($validationRules[self::FIELD_FIXED_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_INSTANT])) {
                        $errs[self::FIELD_FIXED_INSTANT] = [];
                    }
                    $errs[self::FIELD_FIXED_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_INTEGER])) {
            $v = $this->getFixedInteger();
            foreach($validationRules[self::FIELD_FIXED_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_INTEGER])) {
                        $errs[self::FIELD_FIXED_INTEGER] = [];
                    }
                    $errs[self::FIELD_FIXED_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_MARKDOWN])) {
            $v = $this->getFixedMarkdown();
            foreach($validationRules[self::FIELD_FIXED_MARKDOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_MARKDOWN])) {
                        $errs[self::FIELD_FIXED_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_FIXED_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_OID])) {
            $v = $this->getFixedOid();
            foreach($validationRules[self::FIELD_FIXED_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_OID])) {
                        $errs[self::FIELD_FIXED_OID] = [];
                    }
                    $errs[self::FIELD_FIXED_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_POSITIVE_INT])) {
            $v = $this->getFixedPositiveInt();
            foreach($validationRules[self::FIELD_FIXED_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_POSITIVE_INT])) {
                        $errs[self::FIELD_FIXED_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_FIXED_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_STRING])) {
            $v = $this->getFixedString();
            foreach($validationRules[self::FIELD_FIXED_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_STRING])) {
                        $errs[self::FIELD_FIXED_STRING] = [];
                    }
                    $errs[self::FIELD_FIXED_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_TIME])) {
            $v = $this->getFixedTime();
            foreach($validationRules[self::FIELD_FIXED_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_TIME])) {
                        $errs[self::FIELD_FIXED_TIME] = [];
                    }
                    $errs[self::FIELD_FIXED_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_UNSIGNED_INT])) {
            $v = $this->getFixedUnsignedInt();
            foreach($validationRules[self::FIELD_FIXED_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_UNSIGNED_INT])) {
                        $errs[self::FIELD_FIXED_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_FIXED_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_URI])) {
            $v = $this->getFixedUri();
            foreach($validationRules[self::FIELD_FIXED_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_URI])) {
                        $errs[self::FIELD_FIXED_URI] = [];
                    }
                    $errs[self::FIELD_FIXED_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ADDRESS])) {
            $v = $this->getFixedAddress();
            foreach($validationRules[self::FIELD_FIXED_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ADDRESS])) {
                        $errs[self::FIELD_FIXED_ADDRESS] = [];
                    }
                    $errs[self::FIELD_FIXED_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_AGE])) {
            $v = $this->getFixedAge();
            foreach($validationRules[self::FIELD_FIXED_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_AGE])) {
                        $errs[self::FIELD_FIXED_AGE] = [];
                    }
                    $errs[self::FIELD_FIXED_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ANNOTATION])) {
            $v = $this->getFixedAnnotation();
            foreach($validationRules[self::FIELD_FIXED_ANNOTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_ANNOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ANNOTATION])) {
                        $errs[self::FIELD_FIXED_ANNOTATION] = [];
                    }
                    $errs[self::FIELD_FIXED_ANNOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_ATTACHMENT])) {
            $v = $this->getFixedAttachment();
            foreach($validationRules[self::FIELD_FIXED_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_ATTACHMENT])) {
                        $errs[self::FIELD_FIXED_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_FIXED_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_CODEABLE_CONCEPT])) {
            $v = $this->getFixedCodeableConcept();
            foreach($validationRules[self::FIELD_FIXED_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_FIXED_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_FIXED_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_CODING])) {
            $v = $this->getFixedCoding();
            foreach($validationRules[self::FIELD_FIXED_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_CODING])) {
                        $errs[self::FIELD_FIXED_CODING] = [];
                    }
                    $errs[self::FIELD_FIXED_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_CONTACT_POINT])) {
            $v = $this->getFixedContactPoint();
            foreach($validationRules[self::FIELD_FIXED_CONTACT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_CONTACT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_CONTACT_POINT])) {
                        $errs[self::FIELD_FIXED_CONTACT_POINT] = [];
                    }
                    $errs[self::FIELD_FIXED_CONTACT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_COUNT])) {
            $v = $this->getFixedCount();
            foreach($validationRules[self::FIELD_FIXED_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_COUNT])) {
                        $errs[self::FIELD_FIXED_COUNT] = [];
                    }
                    $errs[self::FIELD_FIXED_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DISTANCE])) {
            $v = $this->getFixedDistance();
            foreach($validationRules[self::FIELD_FIXED_DISTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DISTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DISTANCE])) {
                        $errs[self::FIELD_FIXED_DISTANCE] = [];
                    }
                    $errs[self::FIELD_FIXED_DISTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_DURATION])) {
            $v = $this->getFixedDuration();
            foreach($validationRules[self::FIELD_FIXED_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_DURATION])) {
                        $errs[self::FIELD_FIXED_DURATION] = [];
                    }
                    $errs[self::FIELD_FIXED_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_HUMAN_NAME])) {
            $v = $this->getFixedHumanName();
            foreach($validationRules[self::FIELD_FIXED_HUMAN_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_HUMAN_NAME])) {
                        $errs[self::FIELD_FIXED_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_FIXED_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_IDENTIFIER])) {
            $v = $this->getFixedIdentifier();
            foreach($validationRules[self::FIELD_FIXED_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_IDENTIFIER])) {
                        $errs[self::FIELD_FIXED_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_FIXED_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_MONEY])) {
            $v = $this->getFixedMoney();
            foreach($validationRules[self::FIELD_FIXED_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_MONEY])) {
                        $errs[self::FIELD_FIXED_MONEY] = [];
                    }
                    $errs[self::FIELD_FIXED_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_PERIOD])) {
            $v = $this->getFixedPeriod();
            foreach($validationRules[self::FIELD_FIXED_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_PERIOD])) {
                        $errs[self::FIELD_FIXED_PERIOD] = [];
                    }
                    $errs[self::FIELD_FIXED_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_QUANTITY])) {
            $v = $this->getFixedQuantity();
            foreach($validationRules[self::FIELD_FIXED_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_QUANTITY])) {
                        $errs[self::FIELD_FIXED_QUANTITY] = [];
                    }
                    $errs[self::FIELD_FIXED_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_RANGE])) {
            $v = $this->getFixedRange();
            foreach($validationRules[self::FIELD_FIXED_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_RANGE])) {
                        $errs[self::FIELD_FIXED_RANGE] = [];
                    }
                    $errs[self::FIELD_FIXED_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_RATIO])) {
            $v = $this->getFixedRatio();
            foreach($validationRules[self::FIELD_FIXED_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_RATIO])) {
                        $errs[self::FIELD_FIXED_RATIO] = [];
                    }
                    $errs[self::FIELD_FIXED_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_REFERENCE])) {
            $v = $this->getFixedReference();
            foreach($validationRules[self::FIELD_FIXED_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_REFERENCE])) {
                        $errs[self::FIELD_FIXED_REFERENCE] = [];
                    }
                    $errs[self::FIELD_FIXED_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_SAMPLED_DATA])) {
            $v = $this->getFixedSampledData();
            foreach($validationRules[self::FIELD_FIXED_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_SAMPLED_DATA])) {
                        $errs[self::FIELD_FIXED_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_FIXED_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_SIGNATURE])) {
            $v = $this->getFixedSignature();
            foreach($validationRules[self::FIELD_FIXED_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_SIGNATURE])) {
                        $errs[self::FIELD_FIXED_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_FIXED_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_TIMING])) {
            $v = $this->getFixedTiming();
            foreach($validationRules[self::FIELD_FIXED_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_TIMING])) {
                        $errs[self::FIELD_FIXED_TIMING] = [];
                    }
                    $errs[self::FIELD_FIXED_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIXED_META])) {
            $v = $this->getFixedMeta();
            foreach($validationRules[self::FIELD_FIXED_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_FIXED_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIXED_META])) {
                        $errs[self::FIELD_FIXED_META] = [];
                    }
                    $errs[self::FIELD_FIXED_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_BASE_64BINARY])) {
            $v = $this->getPatternBase64Binary();
            foreach($validationRules[self::FIELD_PATTERN_BASE_64BINARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_BASE_64BINARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_BASE_64BINARY])) {
                        $errs[self::FIELD_PATTERN_BASE_64BINARY] = [];
                    }
                    $errs[self::FIELD_PATTERN_BASE_64BINARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_BOOLEAN])) {
            $v = $this->getPatternBoolean();
            foreach($validationRules[self::FIELD_PATTERN_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_BOOLEAN])) {
                        $errs[self::FIELD_PATTERN_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_PATTERN_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_CODE])) {
            $v = $this->getPatternCode();
            foreach($validationRules[self::FIELD_PATTERN_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_CODE])) {
                        $errs[self::FIELD_PATTERN_CODE] = [];
                    }
                    $errs[self::FIELD_PATTERN_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DATE])) {
            $v = $this->getPatternDate();
            foreach($validationRules[self::FIELD_PATTERN_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DATE])) {
                        $errs[self::FIELD_PATTERN_DATE] = [];
                    }
                    $errs[self::FIELD_PATTERN_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DATE_TIME])) {
            $v = $this->getPatternDateTime();
            foreach($validationRules[self::FIELD_PATTERN_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DATE_TIME])) {
                        $errs[self::FIELD_PATTERN_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_PATTERN_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DECIMAL])) {
            $v = $this->getPatternDecimal();
            foreach($validationRules[self::FIELD_PATTERN_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DECIMAL])) {
                        $errs[self::FIELD_PATTERN_DECIMAL] = [];
                    }
                    $errs[self::FIELD_PATTERN_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ID])) {
            $v = $this->getPatternId();
            foreach($validationRules[self::FIELD_PATTERN_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ID])) {
                        $errs[self::FIELD_PATTERN_ID] = [];
                    }
                    $errs[self::FIELD_PATTERN_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_INSTANT])) {
            $v = $this->getPatternInstant();
            foreach($validationRules[self::FIELD_PATTERN_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_INSTANT])) {
                        $errs[self::FIELD_PATTERN_INSTANT] = [];
                    }
                    $errs[self::FIELD_PATTERN_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_INTEGER])) {
            $v = $this->getPatternInteger();
            foreach($validationRules[self::FIELD_PATTERN_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_INTEGER])) {
                        $errs[self::FIELD_PATTERN_INTEGER] = [];
                    }
                    $errs[self::FIELD_PATTERN_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_MARKDOWN])) {
            $v = $this->getPatternMarkdown();
            foreach($validationRules[self::FIELD_PATTERN_MARKDOWN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_MARKDOWN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_MARKDOWN])) {
                        $errs[self::FIELD_PATTERN_MARKDOWN] = [];
                    }
                    $errs[self::FIELD_PATTERN_MARKDOWN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_OID])) {
            $v = $this->getPatternOid();
            foreach($validationRules[self::FIELD_PATTERN_OID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_OID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_OID])) {
                        $errs[self::FIELD_PATTERN_OID] = [];
                    }
                    $errs[self::FIELD_PATTERN_OID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_POSITIVE_INT])) {
            $v = $this->getPatternPositiveInt();
            foreach($validationRules[self::FIELD_PATTERN_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_POSITIVE_INT])) {
                        $errs[self::FIELD_PATTERN_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_PATTERN_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_STRING])) {
            $v = $this->getPatternString();
            foreach($validationRules[self::FIELD_PATTERN_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_STRING])) {
                        $errs[self::FIELD_PATTERN_STRING] = [];
                    }
                    $errs[self::FIELD_PATTERN_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_TIME])) {
            $v = $this->getPatternTime();
            foreach($validationRules[self::FIELD_PATTERN_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_TIME])) {
                        $errs[self::FIELD_PATTERN_TIME] = [];
                    }
                    $errs[self::FIELD_PATTERN_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_UNSIGNED_INT])) {
            $v = $this->getPatternUnsignedInt();
            foreach($validationRules[self::FIELD_PATTERN_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_UNSIGNED_INT])) {
                        $errs[self::FIELD_PATTERN_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_PATTERN_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_URI])) {
            $v = $this->getPatternUri();
            foreach($validationRules[self::FIELD_PATTERN_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_URI])) {
                        $errs[self::FIELD_PATTERN_URI] = [];
                    }
                    $errs[self::FIELD_PATTERN_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ADDRESS])) {
            $v = $this->getPatternAddress();
            foreach($validationRules[self::FIELD_PATTERN_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ADDRESS])) {
                        $errs[self::FIELD_PATTERN_ADDRESS] = [];
                    }
                    $errs[self::FIELD_PATTERN_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_AGE])) {
            $v = $this->getPatternAge();
            foreach($validationRules[self::FIELD_PATTERN_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_AGE])) {
                        $errs[self::FIELD_PATTERN_AGE] = [];
                    }
                    $errs[self::FIELD_PATTERN_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ANNOTATION])) {
            $v = $this->getPatternAnnotation();
            foreach($validationRules[self::FIELD_PATTERN_ANNOTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_ANNOTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ANNOTATION])) {
                        $errs[self::FIELD_PATTERN_ANNOTATION] = [];
                    }
                    $errs[self::FIELD_PATTERN_ANNOTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_ATTACHMENT])) {
            $v = $this->getPatternAttachment();
            foreach($validationRules[self::FIELD_PATTERN_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_ATTACHMENT])) {
                        $errs[self::FIELD_PATTERN_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_PATTERN_ATTACHMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_CODEABLE_CONCEPT])) {
            $v = $this->getPatternCodeableConcept();
            foreach($validationRules[self::FIELD_PATTERN_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_PATTERN_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_PATTERN_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_CODING])) {
            $v = $this->getPatternCoding();
            foreach($validationRules[self::FIELD_PATTERN_CODING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_CODING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_CODING])) {
                        $errs[self::FIELD_PATTERN_CODING] = [];
                    }
                    $errs[self::FIELD_PATTERN_CODING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_CONTACT_POINT])) {
            $v = $this->getPatternContactPoint();
            foreach($validationRules[self::FIELD_PATTERN_CONTACT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_CONTACT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_CONTACT_POINT])) {
                        $errs[self::FIELD_PATTERN_CONTACT_POINT] = [];
                    }
                    $errs[self::FIELD_PATTERN_CONTACT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_COUNT])) {
            $v = $this->getPatternCount();
            foreach($validationRules[self::FIELD_PATTERN_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_COUNT])) {
                        $errs[self::FIELD_PATTERN_COUNT] = [];
                    }
                    $errs[self::FIELD_PATTERN_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DISTANCE])) {
            $v = $this->getPatternDistance();
            foreach($validationRules[self::FIELD_PATTERN_DISTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DISTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DISTANCE])) {
                        $errs[self::FIELD_PATTERN_DISTANCE] = [];
                    }
                    $errs[self::FIELD_PATTERN_DISTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_DURATION])) {
            $v = $this->getPatternDuration();
            foreach($validationRules[self::FIELD_PATTERN_DURATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_DURATION])) {
                        $errs[self::FIELD_PATTERN_DURATION] = [];
                    }
                    $errs[self::FIELD_PATTERN_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_HUMAN_NAME])) {
            $v = $this->getPatternHumanName();
            foreach($validationRules[self::FIELD_PATTERN_HUMAN_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_HUMAN_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_HUMAN_NAME])) {
                        $errs[self::FIELD_PATTERN_HUMAN_NAME] = [];
                    }
                    $errs[self::FIELD_PATTERN_HUMAN_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_IDENTIFIER])) {
            $v = $this->getPatternIdentifier();
            foreach($validationRules[self::FIELD_PATTERN_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_IDENTIFIER])) {
                        $errs[self::FIELD_PATTERN_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_PATTERN_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_MONEY])) {
            $v = $this->getPatternMoney();
            foreach($validationRules[self::FIELD_PATTERN_MONEY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_MONEY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_MONEY])) {
                        $errs[self::FIELD_PATTERN_MONEY] = [];
                    }
                    $errs[self::FIELD_PATTERN_MONEY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_PERIOD])) {
            $v = $this->getPatternPeriod();
            foreach($validationRules[self::FIELD_PATTERN_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_PERIOD])) {
                        $errs[self::FIELD_PATTERN_PERIOD] = [];
                    }
                    $errs[self::FIELD_PATTERN_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_QUANTITY])) {
            $v = $this->getPatternQuantity();
            foreach($validationRules[self::FIELD_PATTERN_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_QUANTITY])) {
                        $errs[self::FIELD_PATTERN_QUANTITY] = [];
                    }
                    $errs[self::FIELD_PATTERN_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_RANGE])) {
            $v = $this->getPatternRange();
            foreach($validationRules[self::FIELD_PATTERN_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_RANGE])) {
                        $errs[self::FIELD_PATTERN_RANGE] = [];
                    }
                    $errs[self::FIELD_PATTERN_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_RATIO])) {
            $v = $this->getPatternRatio();
            foreach($validationRules[self::FIELD_PATTERN_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_RATIO])) {
                        $errs[self::FIELD_PATTERN_RATIO] = [];
                    }
                    $errs[self::FIELD_PATTERN_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_REFERENCE])) {
            $v = $this->getPatternReference();
            foreach($validationRules[self::FIELD_PATTERN_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_REFERENCE])) {
                        $errs[self::FIELD_PATTERN_REFERENCE] = [];
                    }
                    $errs[self::FIELD_PATTERN_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_SAMPLED_DATA])) {
            $v = $this->getPatternSampledData();
            foreach($validationRules[self::FIELD_PATTERN_SAMPLED_DATA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_SAMPLED_DATA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_SAMPLED_DATA])) {
                        $errs[self::FIELD_PATTERN_SAMPLED_DATA] = [];
                    }
                    $errs[self::FIELD_PATTERN_SAMPLED_DATA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_SIGNATURE])) {
            $v = $this->getPatternSignature();
            foreach($validationRules[self::FIELD_PATTERN_SIGNATURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_SIGNATURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_SIGNATURE])) {
                        $errs[self::FIELD_PATTERN_SIGNATURE] = [];
                    }
                    $errs[self::FIELD_PATTERN_SIGNATURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_TIMING])) {
            $v = $this->getPatternTiming();
            foreach($validationRules[self::FIELD_PATTERN_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_TIMING])) {
                        $errs[self::FIELD_PATTERN_TIMING] = [];
                    }
                    $errs[self::FIELD_PATTERN_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATTERN_META])) {
            $v = $this->getPatternMeta();
            foreach($validationRules[self::FIELD_PATTERN_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_PATTERN_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATTERN_META])) {
                        $errs[self::FIELD_PATTERN_META] = [];
                    }
                    $errs[self::FIELD_PATTERN_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXAMPLE])) {
            $v = $this->getExample();
            foreach($validationRules[self::FIELD_EXAMPLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_EXAMPLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXAMPLE])) {
                        $errs[self::FIELD_EXAMPLE] = [];
                    }
                    $errs[self::FIELD_EXAMPLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_DATE])) {
            $v = $this->getMinValueDate();
            foreach($validationRules[self::FIELD_MIN_VALUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_DATE])) {
                        $errs[self::FIELD_MIN_VALUE_DATE] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_DATE_TIME])) {
            $v = $this->getMinValueDateTime();
            foreach($validationRules[self::FIELD_MIN_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_MIN_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_INSTANT])) {
            $v = $this->getMinValueInstant();
            foreach($validationRules[self::FIELD_MIN_VALUE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_INSTANT])) {
                        $errs[self::FIELD_MIN_VALUE_INSTANT] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_TIME])) {
            $v = $this->getMinValueTime();
            foreach($validationRules[self::FIELD_MIN_VALUE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_TIME])) {
                        $errs[self::FIELD_MIN_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_DECIMAL])) {
            $v = $this->getMinValueDecimal();
            foreach($validationRules[self::FIELD_MIN_VALUE_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_DECIMAL])) {
                        $errs[self::FIELD_MIN_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_INTEGER])) {
            $v = $this->getMinValueInteger();
            foreach($validationRules[self::FIELD_MIN_VALUE_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_INTEGER])) {
                        $errs[self::FIELD_MIN_VALUE_INTEGER] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
            $v = $this->getMinValuePositiveInt();
            foreach($validationRules[self::FIELD_MIN_VALUE_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_MIN_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
            $v = $this->getMinValueUnsignedInt();
            foreach($validationRules[self::FIELD_MIN_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
                        $errs[self::FIELD_MIN_VALUE_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MIN_VALUE_QUANTITY])) {
            $v = $this->getMinValueQuantity();
            foreach($validationRules[self::FIELD_MIN_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MIN_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MIN_VALUE_QUANTITY])) {
                        $errs[self::FIELD_MIN_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_MIN_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_DATE])) {
            $v = $this->getMaxValueDate();
            foreach($validationRules[self::FIELD_MAX_VALUE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_DATE])) {
                        $errs[self::FIELD_MAX_VALUE_DATE] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_DATE_TIME])) {
            $v = $this->getMaxValueDateTime();
            foreach($validationRules[self::FIELD_MAX_VALUE_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_DATE_TIME])) {
                        $errs[self::FIELD_MAX_VALUE_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_INSTANT])) {
            $v = $this->getMaxValueInstant();
            foreach($validationRules[self::FIELD_MAX_VALUE_INSTANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_INSTANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_INSTANT])) {
                        $errs[self::FIELD_MAX_VALUE_INSTANT] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_INSTANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_TIME])) {
            $v = $this->getMaxValueTime();
            foreach($validationRules[self::FIELD_MAX_VALUE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_TIME])) {
                        $errs[self::FIELD_MAX_VALUE_TIME] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_DECIMAL])) {
            $v = $this->getMaxValueDecimal();
            foreach($validationRules[self::FIELD_MAX_VALUE_DECIMAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_DECIMAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_DECIMAL])) {
                        $errs[self::FIELD_MAX_VALUE_DECIMAL] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_DECIMAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_INTEGER])) {
            $v = $this->getMaxValueInteger();
            foreach($validationRules[self::FIELD_MAX_VALUE_INTEGER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_INTEGER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_INTEGER])) {
                        $errs[self::FIELD_MAX_VALUE_INTEGER] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_INTEGER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
            $v = $this->getMaxValuePositiveInt();
            foreach($validationRules[self::FIELD_MAX_VALUE_POSITIVE_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_POSITIVE_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
                        $errs[self::FIELD_MAX_VALUE_POSITIVE_INT] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_POSITIVE_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
            $v = $this->getMaxValueUnsignedInt();
            foreach($validationRules[self::FIELD_MAX_VALUE_UNSIGNED_INT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_UNSIGNED_INT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
                        $errs[self::FIELD_MAX_VALUE_UNSIGNED_INT] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_UNSIGNED_INT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_VALUE_QUANTITY])) {
            $v = $this->getMaxValueQuantity();
            foreach($validationRules[self::FIELD_MAX_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_VALUE_QUANTITY])) {
                        $errs[self::FIELD_MAX_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_MAX_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_LENGTH])) {
            $v = $this->getMaxLength();
            foreach($validationRules[self::FIELD_MAX_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAX_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_LENGTH])) {
                        $errs[self::FIELD_MAX_LENGTH] = [];
                    }
                    $errs[self::FIELD_MAX_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONSTRAINT])) {
            $v = $this->getConstraint();
            foreach($validationRules[self::FIELD_CONSTRAINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_CONSTRAINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONSTRAINT])) {
                        $errs[self::FIELD_CONSTRAINT] = [];
                    }
                    $errs[self::FIELD_CONSTRAINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MUST_SUPPORT])) {
            $v = $this->getMustSupport();
            foreach($validationRules[self::FIELD_MUST_SUPPORT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MUST_SUPPORT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MUST_SUPPORT])) {
                        $errs[self::FIELD_MUST_SUPPORT] = [];
                    }
                    $errs[self::FIELD_MUST_SUPPORT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_MODIFIER])) {
            $v = $this->getIsModifier();
            foreach($validationRules[self::FIELD_IS_MODIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_IS_MODIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_MODIFIER])) {
                        $errs[self::FIELD_IS_MODIFIER] = [];
                    }
                    $errs[self::FIELD_IS_MODIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IS_SUMMARY])) {
            $v = $this->getIsSummary();
            foreach($validationRules[self::FIELD_IS_SUMMARY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_IS_SUMMARY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IS_SUMMARY])) {
                        $errs[self::FIELD_IS_SUMMARY] = [];
                    }
                    $errs[self::FIELD_IS_SUMMARY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BINDING])) {
            $v = $this->getBinding();
            foreach($validationRules[self::FIELD_BINDING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_BINDING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BINDING])) {
                        $errs[self::FIELD_BINDING] = [];
                    }
                    $errs[self::FIELD_BINDING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAPPING])) {
            $v = $this->getMapping();
            foreach($validationRules[self::FIELD_MAPPING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION, self::FIELD_MAPPING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAPPING])) {
                        $errs[self::FIELD_MAPPING] = [];
                    }
                    $errs[self::FIELD_MAPPING][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition
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
        } else if (!($type instanceof FHIRElementDefinition)) {
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
            if (self::FIELD_PATH === $childName) {
                $type->setPath(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REPRESENTATION === $childName) {
                $type->addRepresentation(FHIRPropertyRepresentation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SLICE_NAME === $childName) {
                $type->setSliceName(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LABEL === $childName) {
                $type->setLabel(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CODE === $childName) {
                $type->addCode(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SLICING === $childName) {
                $type->setSlicing(FHIRElementDefinitionSlicing::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SHORT === $childName) {
                $type->setShort(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFINITION === $childName) {
                $type->setDefinition(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_COMMENT === $childName) {
                $type->setComment(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_REQUIREMENTS === $childName) {
                $type->setRequirements(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ALIAS === $childName) {
                $type->addAlias(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN === $childName) {
                $type->setMin(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX === $childName) {
                $type->setMax(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_BASE === $childName) {
                $type->setBase(FHIRElementDefinitionBase::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTENT_REFERENCE === $childName) {
                $type->setContentReference(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_TYPE === $childName) {
                $type->addType(FHIRElementDefinitionType::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_BASE_64BINARY === $childName) {
                $type->setDefaultValueBase64Binary(FHIRBase64Binary::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_BOOLEAN === $childName) {
                $type->setDefaultValueBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_CODE === $childName) {
                $type->setDefaultValueCode(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_DATE === $childName) {
                $type->setDefaultValueDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_DATE_TIME === $childName) {
                $type->setDefaultValueDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_DECIMAL === $childName) {
                $type->setDefaultValueDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_ID === $childName) {
                $type->setDefaultValueId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_INSTANT === $childName) {
                $type->setDefaultValueInstant(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_INTEGER === $childName) {
                $type->setDefaultValueInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_MARKDOWN === $childName) {
                $type->setDefaultValueMarkdown(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_OID === $childName) {
                $type->setDefaultValueOid(FHIROid::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_POSITIVE_INT === $childName) {
                $type->setDefaultValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_STRING === $childName) {
                $type->setDefaultValueString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_TIME === $childName) {
                $type->setDefaultValueTime(FHIRTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_UNSIGNED_INT === $childName) {
                $type->setDefaultValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_URI === $childName) {
                $type->setDefaultValueUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DEFAULT_VALUE_ADDRESS === $childName) {
                $type->setDefaultValueAddress(FHIRAddress::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_AGE === $childName) {
                $type->setDefaultValueAge(FHIRAge::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_ANNOTATION === $childName) {
                $type->setDefaultValueAnnotation(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_ATTACHMENT === $childName) {
                $type->setDefaultValueAttachment(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT === $childName) {
                $type->setDefaultValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_CODING === $childName) {
                $type->setDefaultValueCoding(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_CONTACT_POINT === $childName) {
                $type->setDefaultValueContactPoint(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_COUNT === $childName) {
                $type->setDefaultValueCount(FHIRCount::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_DISTANCE === $childName) {
                $type->setDefaultValueDistance(FHIRDistance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_DURATION === $childName) {
                $type->setDefaultValueDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_HUMAN_NAME === $childName) {
                $type->setDefaultValueHumanName(FHIRHumanName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_IDENTIFIER === $childName) {
                $type->setDefaultValueIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_MONEY === $childName) {
                $type->setDefaultValueMoney(FHIRMoney::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_PERIOD === $childName) {
                $type->setDefaultValuePeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_QUANTITY === $childName) {
                $type->setDefaultValueQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_RANGE === $childName) {
                $type->setDefaultValueRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_RATIO === $childName) {
                $type->setDefaultValueRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_REFERENCE === $childName) {
                $type->setDefaultValueReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_SAMPLED_DATA === $childName) {
                $type->setDefaultValueSampledData(FHIRSampledData::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_SIGNATURE === $childName) {
                $type->setDefaultValueSignature(FHIRSignature::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_TIMING === $childName) {
                $type->setDefaultValueTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEFAULT_VALUE_META === $childName) {
                $type->setDefaultValueMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEANING_WHEN_MISSING === $childName) {
                $type->setMeaningWhenMissing(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ORDER_MEANING === $childName) {
                $type->setOrderMeaning(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_BASE_64BINARY === $childName) {
                $type->setFixedBase64Binary(FHIRBase64Binary::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_BOOLEAN === $childName) {
                $type->setFixedBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_CODE === $childName) {
                $type->setFixedCode(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_DATE === $childName) {
                $type->setFixedDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_DATE_TIME === $childName) {
                $type->setFixedDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_DECIMAL === $childName) {
                $type->setFixedDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_ID === $childName) {
                $type->setFixedId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_INSTANT === $childName) {
                $type->setFixedInstant(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_INTEGER === $childName) {
                $type->setFixedInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_MARKDOWN === $childName) {
                $type->setFixedMarkdown(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_OID === $childName) {
                $type->setFixedOid(FHIROid::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_POSITIVE_INT === $childName) {
                $type->setFixedPositiveInt(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_STRING === $childName) {
                $type->setFixedString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_TIME === $childName) {
                $type->setFixedTime(FHIRTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_UNSIGNED_INT === $childName) {
                $type->setFixedUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_URI === $childName) {
                $type->setFixedUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_FIXED_ADDRESS === $childName) {
                $type->setFixedAddress(FHIRAddress::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_AGE === $childName) {
                $type->setFixedAge(FHIRAge::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_ANNOTATION === $childName) {
                $type->setFixedAnnotation(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_ATTACHMENT === $childName) {
                $type->setFixedAttachment(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_CODEABLE_CONCEPT === $childName) {
                $type->setFixedCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_CODING === $childName) {
                $type->setFixedCoding(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_CONTACT_POINT === $childName) {
                $type->setFixedContactPoint(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_COUNT === $childName) {
                $type->setFixedCount(FHIRCount::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_DISTANCE === $childName) {
                $type->setFixedDistance(FHIRDistance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_DURATION === $childName) {
                $type->setFixedDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_HUMAN_NAME === $childName) {
                $type->setFixedHumanName(FHIRHumanName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_IDENTIFIER === $childName) {
                $type->setFixedIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_MONEY === $childName) {
                $type->setFixedMoney(FHIRMoney::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_PERIOD === $childName) {
                $type->setFixedPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_QUANTITY === $childName) {
                $type->setFixedQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_RANGE === $childName) {
                $type->setFixedRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_RATIO === $childName) {
                $type->setFixedRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_REFERENCE === $childName) {
                $type->setFixedReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_SAMPLED_DATA === $childName) {
                $type->setFixedSampledData(FHIRSampledData::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_SIGNATURE === $childName) {
                $type->setFixedSignature(FHIRSignature::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_TIMING === $childName) {
                $type->setFixedTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FIXED_META === $childName) {
                $type->setFixedMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_BASE_64BINARY === $childName) {
                $type->setPatternBase64Binary(FHIRBase64Binary::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_BOOLEAN === $childName) {
                $type->setPatternBoolean(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_CODE === $childName) {
                $type->setPatternCode(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_DATE === $childName) {
                $type->setPatternDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_DATE_TIME === $childName) {
                $type->setPatternDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_DECIMAL === $childName) {
                $type->setPatternDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_ID === $childName) {
                $type->setPatternId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_INSTANT === $childName) {
                $type->setPatternInstant(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_INTEGER === $childName) {
                $type->setPatternInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_MARKDOWN === $childName) {
                $type->setPatternMarkdown(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_OID === $childName) {
                $type->setPatternOid(FHIROid::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_POSITIVE_INT === $childName) {
                $type->setPatternPositiveInt(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_STRING === $childName) {
                $type->setPatternString(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_TIME === $childName) {
                $type->setPatternTime(FHIRTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_UNSIGNED_INT === $childName) {
                $type->setPatternUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_URI === $childName) {
                $type->setPatternUri(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PATTERN_ADDRESS === $childName) {
                $type->setPatternAddress(FHIRAddress::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_AGE === $childName) {
                $type->setPatternAge(FHIRAge::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_ANNOTATION === $childName) {
                $type->setPatternAnnotation(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_ATTACHMENT === $childName) {
                $type->setPatternAttachment(FHIRAttachment::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_CODEABLE_CONCEPT === $childName) {
                $type->setPatternCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_CODING === $childName) {
                $type->setPatternCoding(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_CONTACT_POINT === $childName) {
                $type->setPatternContactPoint(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_COUNT === $childName) {
                $type->setPatternCount(FHIRCount::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_DISTANCE === $childName) {
                $type->setPatternDistance(FHIRDistance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_DURATION === $childName) {
                $type->setPatternDuration(FHIRDuration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_HUMAN_NAME === $childName) {
                $type->setPatternHumanName(FHIRHumanName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_IDENTIFIER === $childName) {
                $type->setPatternIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_MONEY === $childName) {
                $type->setPatternMoney(FHIRMoney::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_PERIOD === $childName) {
                $type->setPatternPeriod(FHIRPeriod::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_QUANTITY === $childName) {
                $type->setPatternQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_RANGE === $childName) {
                $type->setPatternRange(FHIRRange::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_RATIO === $childName) {
                $type->setPatternRatio(FHIRRatio::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_REFERENCE === $childName) {
                $type->setPatternReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_SAMPLED_DATA === $childName) {
                $type->setPatternSampledData(FHIRSampledData::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_SIGNATURE === $childName) {
                $type->setPatternSignature(FHIRSignature::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_TIMING === $childName) {
                $type->setPatternTiming(FHIRTiming::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATTERN_META === $childName) {
                $type->setPatternMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXAMPLE === $childName) {
                $type->addExample(FHIRElementDefinitionExample::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MIN_VALUE_DATE === $childName) {
                $type->setMinValueDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN_VALUE_DATE_TIME === $childName) {
                $type->setMinValueDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN_VALUE_INSTANT === $childName) {
                $type->setMinValueInstant(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN_VALUE_TIME === $childName) {
                $type->setMinValueTime(FHIRTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN_VALUE_DECIMAL === $childName) {
                $type->setMinValueDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN_VALUE_INTEGER === $childName) {
                $type->setMinValueInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN_VALUE_POSITIVE_INT === $childName) {
                $type->setMinValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN_VALUE_UNSIGNED_INT === $childName) {
                $type->setMinValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MIN_VALUE_QUANTITY === $childName) {
                $type->setMinValueQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_VALUE_DATE === $childName) {
                $type->setMaxValueDate(FHIRDate::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_VALUE_DATE_TIME === $childName) {
                $type->setMaxValueDateTime(FHIRDateTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_VALUE_INSTANT === $childName) {
                $type->setMaxValueInstant(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_VALUE_TIME === $childName) {
                $type->setMaxValueTime(FHIRTime::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_VALUE_DECIMAL === $childName) {
                $type->setMaxValueDecimal(FHIRDecimal::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_VALUE_INTEGER === $childName) {
                $type->setMaxValueInteger(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_VALUE_POSITIVE_INT === $childName) {
                $type->setMaxValuePositiveInt(FHIRPositiveInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_VALUE_UNSIGNED_INT === $childName) {
                $type->setMaxValueUnsignedInt(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MAX_VALUE_QUANTITY === $childName) {
                $type->setMaxValueQuantity(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAX_LENGTH === $childName) {
                $type->setMaxLength(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONDITION === $childName) {
                $type->addCondition(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CONSTRAINT === $childName) {
                $type->addConstraint(FHIRElementDefinitionConstraint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MUST_SUPPORT === $childName) {
                $type->setMustSupport(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IS_MODIFIER === $childName) {
                $type->setIsModifier(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IS_SUMMARY === $childName) {
                $type->setIsSummary(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_BINDING === $childName) {
                $type->setBinding(FHIRElementDefinitionBinding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MAPPING === $childName) {
                $type->addMapping(FHIRElementDefinitionMapping::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_PATH])) {
            $pt = $type->getPath();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPath((string)$attributes[self::FIELD_PATH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SLICE_NAME])) {
            $pt = $type->getSliceName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SLICE_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setSliceName((string)$attributes[self::FIELD_SLICE_NAME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LABEL])) {
            $pt = $type->getLabel();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLabel((string)$attributes[self::FIELD_LABEL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SHORT])) {
            $pt = $type->getShort();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SHORT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setShort((string)$attributes[self::FIELD_SHORT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFINITION])) {
            $pt = $type->getDefinition();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFINITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefinition((string)$attributes[self::FIELD_DEFINITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COMMENT])) {
            $pt = $type->getComment();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setComment((string)$attributes[self::FIELD_COMMENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REQUIREMENTS])) {
            $pt = $type->getRequirements();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUIREMENTS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequirements((string)$attributes[self::FIELD_REQUIREMENTS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ALIAS])) {
            $type->addAlias((string)$attributes[self::FIELD_ALIAS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MIN])) {
            $pt = $type->getMin();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMin((string)$attributes[self::FIELD_MIN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX])) {
            $pt = $type->getMax();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMax((string)$attributes[self::FIELD_MAX], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONTENT_REFERENCE])) {
            $pt = $type->getContentReference();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CONTENT_REFERENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setContentReference((string)$attributes[self::FIELD_CONTENT_REFERENCE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY])) {
            $pt = $type->getDefaultValueBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueBase64Binary((string)$attributes[self::FIELD_DEFAULT_VALUE_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN])) {
            $pt = $type->getDefaultValueBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueBoolean((string)$attributes[self::FIELD_DEFAULT_VALUE_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_CODE])) {
            $pt = $type->getDefaultValueCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueCode((string)$attributes[self::FIELD_DEFAULT_VALUE_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE])) {
            $pt = $type->getDefaultValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueDate((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME])) {
            $pt = $type->getDefaultValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueDateTime((string)$attributes[self::FIELD_DEFAULT_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_DECIMAL])) {
            $pt = $type->getDefaultValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueDecimal((string)$attributes[self::FIELD_DEFAULT_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_ID])) {
            $pt = $type->getDefaultValueId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueId((string)$attributes[self::FIELD_DEFAULT_VALUE_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INSTANT])) {
            $pt = $type->getDefaultValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueInstant((string)$attributes[self::FIELD_DEFAULT_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_INTEGER])) {
            $pt = $type->getDefaultValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueInteger((string)$attributes[self::FIELD_DEFAULT_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN])) {
            $pt = $type->getDefaultValueMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueMarkdown((string)$attributes[self::FIELD_DEFAULT_VALUE_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_OID])) {
            $pt = $type->getDefaultValueOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueOid((string)$attributes[self::FIELD_DEFAULT_VALUE_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT])) {
            $pt = $type->getDefaultValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValuePositiveInt((string)$attributes[self::FIELD_DEFAULT_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_STRING])) {
            $pt = $type->getDefaultValueString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueString((string)$attributes[self::FIELD_DEFAULT_VALUE_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_TIME])) {
            $pt = $type->getDefaultValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueTime((string)$attributes[self::FIELD_DEFAULT_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT])) {
            $pt = $type->getDefaultValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUnsignedInt((string)$attributes[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DEFAULT_VALUE_URI])) {
            $pt = $type->getDefaultValueUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DEFAULT_VALUE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDefaultValueUri((string)$attributes[self::FIELD_DEFAULT_VALUE_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MEANING_WHEN_MISSING])) {
            $pt = $type->getMeaningWhenMissing();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MEANING_WHEN_MISSING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMeaningWhenMissing((string)$attributes[self::FIELD_MEANING_WHEN_MISSING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ORDER_MEANING])) {
            $pt = $type->getOrderMeaning();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ORDER_MEANING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOrderMeaning((string)$attributes[self::FIELD_ORDER_MEANING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_BASE_64BINARY])) {
            $pt = $type->getFixedBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedBase64Binary((string)$attributes[self::FIELD_FIXED_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_BOOLEAN])) {
            $pt = $type->getFixedBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedBoolean((string)$attributes[self::FIELD_FIXED_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_CODE])) {
            $pt = $type->getFixedCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedCode((string)$attributes[self::FIELD_FIXED_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_DATE])) {
            $pt = $type->getFixedDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedDate((string)$attributes[self::FIELD_FIXED_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_DATE_TIME])) {
            $pt = $type->getFixedDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedDateTime((string)$attributes[self::FIELD_FIXED_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_DECIMAL])) {
            $pt = $type->getFixedDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedDecimal((string)$attributes[self::FIELD_FIXED_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_ID])) {
            $pt = $type->getFixedId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedId((string)$attributes[self::FIELD_FIXED_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_INSTANT])) {
            $pt = $type->getFixedInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedInstant((string)$attributes[self::FIELD_FIXED_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_INTEGER])) {
            $pt = $type->getFixedInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedInteger((string)$attributes[self::FIELD_FIXED_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_MARKDOWN])) {
            $pt = $type->getFixedMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedMarkdown((string)$attributes[self::FIELD_FIXED_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_OID])) {
            $pt = $type->getFixedOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedOid((string)$attributes[self::FIELD_FIXED_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_POSITIVE_INT])) {
            $pt = $type->getFixedPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedPositiveInt((string)$attributes[self::FIELD_FIXED_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_STRING])) {
            $pt = $type->getFixedString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedString((string)$attributes[self::FIELD_FIXED_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_TIME])) {
            $pt = $type->getFixedTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedTime((string)$attributes[self::FIELD_FIXED_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_UNSIGNED_INT])) {
            $pt = $type->getFixedUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedUnsignedInt((string)$attributes[self::FIELD_FIXED_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_FIXED_URI])) {
            $pt = $type->getFixedUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_FIXED_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setFixedUri((string)$attributes[self::FIELD_FIXED_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_BASE_64BINARY])) {
            $pt = $type->getPatternBase64Binary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternBase64Binary((string)$attributes[self::FIELD_PATTERN_BASE_64BINARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_BOOLEAN])) {
            $pt = $type->getPatternBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternBoolean((string)$attributes[self::FIELD_PATTERN_BOOLEAN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_CODE])) {
            $pt = $type->getPatternCode();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternCode((string)$attributes[self::FIELD_PATTERN_CODE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_DATE])) {
            $pt = $type->getPatternDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternDate((string)$attributes[self::FIELD_PATTERN_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_DATE_TIME])) {
            $pt = $type->getPatternDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternDateTime((string)$attributes[self::FIELD_PATTERN_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_DECIMAL])) {
            $pt = $type->getPatternDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternDecimal((string)$attributes[self::FIELD_PATTERN_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_ID])) {
            $pt = $type->getPatternId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternId((string)$attributes[self::FIELD_PATTERN_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_INSTANT])) {
            $pt = $type->getPatternInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternInstant((string)$attributes[self::FIELD_PATTERN_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_INTEGER])) {
            $pt = $type->getPatternInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternInteger((string)$attributes[self::FIELD_PATTERN_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_MARKDOWN])) {
            $pt = $type->getPatternMarkdown();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternMarkdown((string)$attributes[self::FIELD_PATTERN_MARKDOWN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_OID])) {
            $pt = $type->getPatternOid();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternOid((string)$attributes[self::FIELD_PATTERN_OID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_POSITIVE_INT])) {
            $pt = $type->getPatternPositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternPositiveInt((string)$attributes[self::FIELD_PATTERN_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_STRING])) {
            $pt = $type->getPatternString();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternString((string)$attributes[self::FIELD_PATTERN_STRING], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_TIME])) {
            $pt = $type->getPatternTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternTime((string)$attributes[self::FIELD_PATTERN_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_UNSIGNED_INT])) {
            $pt = $type->getPatternUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternUnsignedInt((string)$attributes[self::FIELD_PATTERN_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATTERN_URI])) {
            $pt = $type->getPatternUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATTERN_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPatternUri((string)$attributes[self::FIELD_PATTERN_URI], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_DATE])) {
            $pt = $type->getMinValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueDate((string)$attributes[self::FIELD_MIN_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_DATE_TIME])) {
            $pt = $type->getMinValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueDateTime((string)$attributes[self::FIELD_MIN_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_INSTANT])) {
            $pt = $type->getMinValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueInstant((string)$attributes[self::FIELD_MIN_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_TIME])) {
            $pt = $type->getMinValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueTime((string)$attributes[self::FIELD_MIN_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_DECIMAL])) {
            $pt = $type->getMinValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueDecimal((string)$attributes[self::FIELD_MIN_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_INTEGER])) {
            $pt = $type->getMinValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueInteger((string)$attributes[self::FIELD_MIN_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_POSITIVE_INT])) {
            $pt = $type->getMinValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValuePositiveInt((string)$attributes[self::FIELD_MIN_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MIN_VALUE_UNSIGNED_INT])) {
            $pt = $type->getMinValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MIN_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMinValueUnsignedInt((string)$attributes[self::FIELD_MIN_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_DATE])) {
            $pt = $type->getMaxValueDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueDate((string)$attributes[self::FIELD_MAX_VALUE_DATE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_DATE_TIME])) {
            $pt = $type->getMaxValueDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueDateTime((string)$attributes[self::FIELD_MAX_VALUE_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_INSTANT])) {
            $pt = $type->getMaxValueInstant();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueInstant((string)$attributes[self::FIELD_MAX_VALUE_INSTANT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_TIME])) {
            $pt = $type->getMaxValueTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueTime((string)$attributes[self::FIELD_MAX_VALUE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_DECIMAL])) {
            $pt = $type->getMaxValueDecimal();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueDecimal((string)$attributes[self::FIELD_MAX_VALUE_DECIMAL], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_INTEGER])) {
            $pt = $type->getMaxValueInteger();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueInteger((string)$attributes[self::FIELD_MAX_VALUE_INTEGER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_POSITIVE_INT])) {
            $pt = $type->getMaxValuePositiveInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValuePositiveInt((string)$attributes[self::FIELD_MAX_VALUE_POSITIVE_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_VALUE_UNSIGNED_INT])) {
            $pt = $type->getMaxValueUnsignedInt();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxValueUnsignedInt((string)$attributes[self::FIELD_MAX_VALUE_UNSIGNED_INT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MAX_LENGTH])) {
            $pt = $type->getMaxLength();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MAX_LENGTH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaxLength((string)$attributes[self::FIELD_MAX_LENGTH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CONDITION])) {
            $type->addCondition((string)$attributes[self::FIELD_CONDITION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_MUST_SUPPORT])) {
            $pt = $type->getMustSupport();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MUST_SUPPORT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setMustSupport((string)$attributes[self::FIELD_MUST_SUPPORT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IS_MODIFIER])) {
            $pt = $type->getIsModifier();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IS_MODIFIER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsModifier((string)$attributes[self::FIELD_IS_MODIFIER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IS_SUMMARY])) {
            $pt = $type->getIsSummary();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IS_SUMMARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setIsSummary((string)$attributes[self::FIELD_IS_SUMMARY], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'ElementDefinition', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPath())) {
            $xw->writeAttribute(self::FIELD_PATH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SLICE_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getSliceName())) {
            $xw->writeAttribute(self::FIELD_SLICE_NAME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->writeAttribute(self::FIELD_LABEL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SHORT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getShort())) {
            $xw->writeAttribute(self::FIELD_SHORT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefinition())) {
            $xw->writeAttribute(self::FIELD_DEFINITION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->writeAttribute(self::FIELD_COMMENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REQUIREMENTS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRequirements())) {
            $xw->writeAttribute(self::FIELD_REQUIREMENTS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ALIAS] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getAlias())) {
            $xw->writeAttribute(self::FIELD_ALIAS, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getAlias()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_ALIAS, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMin())) {
            $xw->writeAttribute(self::FIELD_MIN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMax())) {
            $xw->writeAttribute(self::FIELD_MAX, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONTENT_REFERENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getContentReference())) {
            $xw->writeAttribute(self::FIELD_CONTENT_REFERENCE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueBase64Binary())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BASE_64BINARY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueBoolean())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueCode())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_CODE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueDate())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueDateTime())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueDecimal())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueId())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueInstant())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueInteger())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueMarkdown())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_MARKDOWN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueOid())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_OID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValuePositiveInt())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueString())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueTime())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDefaultValueUri())) {
            $xw->writeAttribute(self::FIELD_DEFAULT_VALUE_URI, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MEANING_WHEN_MISSING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMeaningWhenMissing())) {
            $xw->writeAttribute(self::FIELD_MEANING_WHEN_MISSING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ORDER_MEANING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOrderMeaning())) {
            $xw->writeAttribute(self::FIELD_ORDER_MEANING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedBase64Binary())) {
            $xw->writeAttribute(self::FIELD_FIXED_BASE_64BINARY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedBoolean())) {
            $xw->writeAttribute(self::FIELD_FIXED_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedCode())) {
            $xw->writeAttribute(self::FIELD_FIXED_CODE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedDate())) {
            $xw->writeAttribute(self::FIELD_FIXED_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedDateTime())) {
            $xw->writeAttribute(self::FIELD_FIXED_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedDecimal())) {
            $xw->writeAttribute(self::FIELD_FIXED_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedId())) {
            $xw->writeAttribute(self::FIELD_FIXED_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedInstant())) {
            $xw->writeAttribute(self::FIELD_FIXED_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedInteger())) {
            $xw->writeAttribute(self::FIELD_FIXED_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedMarkdown())) {
            $xw->writeAttribute(self::FIELD_FIXED_MARKDOWN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedOid())) {
            $xw->writeAttribute(self::FIELD_FIXED_OID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedPositiveInt())) {
            $xw->writeAttribute(self::FIELD_FIXED_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedString())) {
            $xw->writeAttribute(self::FIELD_FIXED_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedTime())) {
            $xw->writeAttribute(self::FIELD_FIXED_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedUnsignedInt())) {
            $xw->writeAttribute(self::FIELD_FIXED_UNSIGNED_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getFixedUri())) {
            $xw->writeAttribute(self::FIELD_FIXED_URI, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternBase64Binary())) {
            $xw->writeAttribute(self::FIELD_PATTERN_BASE_64BINARY, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternBoolean())) {
            $xw->writeAttribute(self::FIELD_PATTERN_BOOLEAN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternCode())) {
            $xw->writeAttribute(self::FIELD_PATTERN_CODE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternDate())) {
            $xw->writeAttribute(self::FIELD_PATTERN_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternDateTime())) {
            $xw->writeAttribute(self::FIELD_PATTERN_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternDecimal())) {
            $xw->writeAttribute(self::FIELD_PATTERN_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternId())) {
            $xw->writeAttribute(self::FIELD_PATTERN_ID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternInstant())) {
            $xw->writeAttribute(self::FIELD_PATTERN_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternInteger())) {
            $xw->writeAttribute(self::FIELD_PATTERN_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternMarkdown())) {
            $xw->writeAttribute(self::FIELD_PATTERN_MARKDOWN, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternOid())) {
            $xw->writeAttribute(self::FIELD_PATTERN_OID, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternPositiveInt())) {
            $xw->writeAttribute(self::FIELD_PATTERN_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternString())) {
            $xw->writeAttribute(self::FIELD_PATTERN_STRING, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternTime())) {
            $xw->writeAttribute(self::FIELD_PATTERN_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternUnsignedInt())) {
            $xw->writeAttribute(self::FIELD_PATTERN_UNSIGNED_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPatternUri())) {
            $xw->writeAttribute(self::FIELD_PATTERN_URI, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinValueDate())) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinValueDateTime())) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinValueInstant())) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinValueTime())) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinValueDecimal())) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinValueInteger())) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinValuePositiveInt())) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMinValueUnsignedInt())) {
            $xw->writeAttribute(self::FIELD_MIN_VALUE_UNSIGNED_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxValueDate())) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_DATE, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxValueDateTime())) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxValueInstant())) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_INSTANT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxValueTime())) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxValueDecimal())) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_DECIMAL, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxValueInteger())) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_INTEGER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxValuePositiveInt())) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_POSITIVE_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxValueUnsignedInt())) {
            $xw->writeAttribute(self::FIELD_MAX_VALUE_UNSIGNED_INT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMaxLength())) {
            $xw->writeAttribute(self::FIELD_MAX_LENGTH, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITION] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getCondition())) {
            $xw->writeAttribute(self::FIELD_CONDITION, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getCondition()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_CONDITION, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MUST_SUPPORT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getMustSupport())) {
            $xw->writeAttribute(self::FIELD_MUST_SUPPORT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IS_MODIFIER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIsModifier())) {
            $xw->writeAttribute(self::FIELD_IS_MODIFIER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IS_SUMMARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getIsSummary())) {
            $xw->writeAttribute(self::FIELD_IS_SUMMARY, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPath())) {
            $xw->startElement(self::FIELD_PATH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRepresentation() as $v) {
            $xw->startElement(self::FIELD_REPRESENTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SLICE_NAME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getSliceName())) {
            $xw->startElement(self::FIELD_SLICE_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_LABEL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getLabel())) {
            $xw->startElement(self::FIELD_LABEL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCode() as $v) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getSlicing())) {
            $xw->startElement(self::FIELD_SLICING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_SHORT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getShort())) {
            $xw->startElement(self::FIELD_SHORT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFINITION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefinition())) {
            $xw->startElement(self::FIELD_DEFINITION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_COMMENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getComment())) {
            $xw->startElement(self::FIELD_COMMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_REQUIREMENTS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRequirements())) {
            $xw->startElement(self::FIELD_REQUIREMENTS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ALIAS] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getAlias())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_ALIAS);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMin())) {
            $xw->startElement(self::FIELD_MIN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMax())) {
            $xw->startElement(self::FIELD_MAX);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getBase())) {
            $xw->startElement(self::FIELD_BASE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONTENT_REFERENCE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getContentReference())) {
            $xw->startElement(self::FIELD_CONTENT_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getType() as $v) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueBase64Binary())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BASE_64BINARY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueBoolean())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueCode())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueDate())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueDateTime())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueDecimal())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueId())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueInstant())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueInteger())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueMarkdown())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_MARKDOWN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueOid())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_OID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValuePositiveInt())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueString())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueTime())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueUnsignedInt())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_UNSIGNED_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DEFAULT_VALUE_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDefaultValueUri())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ADDRESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_AGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ANNOTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_ATTACHMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CODING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_CONTACT_POINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_COUNT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DISTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_HUMAN_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_MONEY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_SAMPLED_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_SIGNATURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $xw->startElement(self::FIELD_DEFAULT_VALUE_META);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MEANING_WHEN_MISSING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMeaningWhenMissing())) {
            $xw->startElement(self::FIELD_MEANING_WHEN_MISSING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_ORDER_MEANING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOrderMeaning())) {
            $xw->startElement(self::FIELD_ORDER_MEANING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedBase64Binary())) {
            $xw->startElement(self::FIELD_FIXED_BASE_64BINARY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedBoolean())) {
            $xw->startElement(self::FIELD_FIXED_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedCode())) {
            $xw->startElement(self::FIELD_FIXED_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedDate())) {
            $xw->startElement(self::FIELD_FIXED_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedDateTime())) {
            $xw->startElement(self::FIELD_FIXED_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedDecimal())) {
            $xw->startElement(self::FIELD_FIXED_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedId())) {
            $xw->startElement(self::FIELD_FIXED_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedInstant())) {
            $xw->startElement(self::FIELD_FIXED_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedInteger())) {
            $xw->startElement(self::FIELD_FIXED_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedMarkdown())) {
            $xw->startElement(self::FIELD_FIXED_MARKDOWN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedOid())) {
            $xw->startElement(self::FIELD_FIXED_OID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedPositiveInt())) {
            $xw->startElement(self::FIELD_FIXED_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedString())) {
            $xw->startElement(self::FIELD_FIXED_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedTime())) {
            $xw->startElement(self::FIELD_FIXED_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedUnsignedInt())) {
            $xw->startElement(self::FIELD_FIXED_UNSIGNED_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_FIXED_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getFixedUri())) {
            $xw->startElement(self::FIELD_FIXED_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedAddress())) {
            $xw->startElement(self::FIELD_FIXED_ADDRESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedAge())) {
            $xw->startElement(self::FIELD_FIXED_AGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedAnnotation())) {
            $xw->startElement(self::FIELD_FIXED_ANNOTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedAttachment())) {
            $xw->startElement(self::FIELD_FIXED_ATTACHMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedCodeableConcept())) {
            $xw->startElement(self::FIELD_FIXED_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedCoding())) {
            $xw->startElement(self::FIELD_FIXED_CODING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedContactPoint())) {
            $xw->startElement(self::FIELD_FIXED_CONTACT_POINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedCount())) {
            $xw->startElement(self::FIELD_FIXED_COUNT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedDistance())) {
            $xw->startElement(self::FIELD_FIXED_DISTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedDuration())) {
            $xw->startElement(self::FIELD_FIXED_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedHumanName())) {
            $xw->startElement(self::FIELD_FIXED_HUMAN_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedIdentifier())) {
            $xw->startElement(self::FIELD_FIXED_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedMoney())) {
            $xw->startElement(self::FIELD_FIXED_MONEY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedPeriod())) {
            $xw->startElement(self::FIELD_FIXED_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedQuantity())) {
            $xw->startElement(self::FIELD_FIXED_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedRange())) {
            $xw->startElement(self::FIELD_FIXED_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedRatio())) {
            $xw->startElement(self::FIELD_FIXED_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedReference())) {
            $xw->startElement(self::FIELD_FIXED_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedSampledData())) {
            $xw->startElement(self::FIELD_FIXED_SAMPLED_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedSignature())) {
            $xw->startElement(self::FIELD_FIXED_SIGNATURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedTiming())) {
            $xw->startElement(self::FIELD_FIXED_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getFixedMeta())) {
            $xw->startElement(self::FIELD_FIXED_META);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_BASE_64BINARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternBase64Binary())) {
            $xw->startElement(self::FIELD_PATTERN_BASE_64BINARY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_BOOLEAN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternBoolean())) {
            $xw->startElement(self::FIELD_PATTERN_BOOLEAN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_CODE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternCode())) {
            $xw->startElement(self::FIELD_PATTERN_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternDate())) {
            $xw->startElement(self::FIELD_PATTERN_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternDateTime())) {
            $xw->startElement(self::FIELD_PATTERN_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternDecimal())) {
            $xw->startElement(self::FIELD_PATTERN_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_ID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternId())) {
            $xw->startElement(self::FIELD_PATTERN_ID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternInstant())) {
            $xw->startElement(self::FIELD_PATTERN_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternInteger())) {
            $xw->startElement(self::FIELD_PATTERN_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_MARKDOWN] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternMarkdown())) {
            $xw->startElement(self::FIELD_PATTERN_MARKDOWN);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_OID] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternOid())) {
            $xw->startElement(self::FIELD_PATTERN_OID);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternPositiveInt())) {
            $xw->startElement(self::FIELD_PATTERN_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_STRING] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternString())) {
            $xw->startElement(self::FIELD_PATTERN_STRING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternTime())) {
            $xw->startElement(self::FIELD_PATTERN_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternUnsignedInt())) {
            $xw->startElement(self::FIELD_PATTERN_UNSIGNED_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PATTERN_URI] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPatternUri())) {
            $xw->startElement(self::FIELD_PATTERN_URI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternAddress())) {
            $xw->startElement(self::FIELD_PATTERN_ADDRESS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternAge())) {
            $xw->startElement(self::FIELD_PATTERN_AGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternAnnotation())) {
            $xw->startElement(self::FIELD_PATTERN_ANNOTATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternAttachment())) {
            $xw->startElement(self::FIELD_PATTERN_ATTACHMENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternCodeableConcept())) {
            $xw->startElement(self::FIELD_PATTERN_CODEABLE_CONCEPT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternCoding())) {
            $xw->startElement(self::FIELD_PATTERN_CODING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternContactPoint())) {
            $xw->startElement(self::FIELD_PATTERN_CONTACT_POINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternCount())) {
            $xw->startElement(self::FIELD_PATTERN_COUNT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternDistance())) {
            $xw->startElement(self::FIELD_PATTERN_DISTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternDuration())) {
            $xw->startElement(self::FIELD_PATTERN_DURATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternHumanName())) {
            $xw->startElement(self::FIELD_PATTERN_HUMAN_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternIdentifier())) {
            $xw->startElement(self::FIELD_PATTERN_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternMoney())) {
            $xw->startElement(self::FIELD_PATTERN_MONEY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternPeriod())) {
            $xw->startElement(self::FIELD_PATTERN_PERIOD);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternQuantity())) {
            $xw->startElement(self::FIELD_PATTERN_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternRange())) {
            $xw->startElement(self::FIELD_PATTERN_RANGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternRatio())) {
            $xw->startElement(self::FIELD_PATTERN_RATIO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternReference())) {
            $xw->startElement(self::FIELD_PATTERN_REFERENCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternSampledData())) {
            $xw->startElement(self::FIELD_PATTERN_SAMPLED_DATA);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternSignature())) {
            $xw->startElement(self::FIELD_PATTERN_SIGNATURE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternTiming())) {
            $xw->startElement(self::FIELD_PATTERN_TIMING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getPatternMeta())) {
            $xw->startElement(self::FIELD_PATTERN_META);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getExample() as $v) {
            $xw->startElement(self::FIELD_EXAMPLE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinValueDate())) {
            $xw->startElement(self::FIELD_MIN_VALUE_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinValueDateTime())) {
            $xw->startElement(self::FIELD_MIN_VALUE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinValueInstant())) {
            $xw->startElement(self::FIELD_MIN_VALUE_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinValueTime())) {
            $xw->startElement(self::FIELD_MIN_VALUE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinValueDecimal())) {
            $xw->startElement(self::FIELD_MIN_VALUE_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinValueInteger())) {
            $xw->startElement(self::FIELD_MIN_VALUE_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinValuePositiveInt())) {
            $xw->startElement(self::FIELD_MIN_VALUE_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MIN_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMinValueUnsignedInt())) {
            $xw->startElement(self::FIELD_MIN_VALUE_UNSIGNED_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMinValueQuantity())) {
            $xw->startElement(self::FIELD_MIN_VALUE_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxValueDate())) {
            $xw->startElement(self::FIELD_MAX_VALUE_DATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxValueDateTime())) {
            $xw->startElement(self::FIELD_MAX_VALUE_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INSTANT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxValueInstant())) {
            $xw->startElement(self::FIELD_MAX_VALUE_INSTANT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxValueTime())) {
            $xw->startElement(self::FIELD_MAX_VALUE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_DECIMAL] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxValueDecimal())) {
            $xw->startElement(self::FIELD_MAX_VALUE_DECIMAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_INTEGER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxValueInteger())) {
            $xw->startElement(self::FIELD_MAX_VALUE_INTEGER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_POSITIVE_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxValuePositiveInt())) {
            $xw->startElement(self::FIELD_MAX_VALUE_POSITIVE_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_VALUE_UNSIGNED_INT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxValueUnsignedInt())) {
            $xw->startElement(self::FIELD_MAX_VALUE_UNSIGNED_INT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getMaxValueQuantity())) {
            $xw->startElement(self::FIELD_MAX_VALUE_QUANTITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MAX_LENGTH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMaxLength())) {
            $xw->startElement(self::FIELD_MAX_LENGTH);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_CONDITION] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getCondition())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_CONDITION);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        foreach ($this->getConstraint() as $v) {
            $xw->startElement(self::FIELD_CONSTRAINT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MUST_SUPPORT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getMustSupport())) {
            $xw->startElement(self::FIELD_MUST_SUPPORT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IS_MODIFIER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIsModifier())) {
            $xw->startElement(self::FIELD_IS_MODIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_IS_SUMMARY] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getIsSummary())) {
            $xw->startElement(self::FIELD_IS_SUMMARY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getBinding())) {
            $xw->startElement(self::FIELD_BINDING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getMapping() as $v) {
            $xw->startElement(self::FIELD_MAPPING);
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
        if (null !== ($v = $this->getPath())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATH_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRPropertyRepresentation::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_REPRESENTATION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REPRESENTATION_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getSliceName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SLICE_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SLICE_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLabel())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LABEL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LABEL_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if (null !== ($v = $this->getSlicing())) {
            $out->{self::FIELD_SLICING} = $v;
        }
        if (null !== ($v = $this->getShort())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SHORT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SHORT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFINITION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFINITION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getComment())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMMENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMMENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequirements())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIREMENTS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIREMENTS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAlias())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRString::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_ALIAS} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ALIAS_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getMin())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMax())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getBase())) {
            $out->{self::FIELD_BASE} = $v;
        }
        if (null !== ($v = $this->getContentReference())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTENT_REFERENCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTENT_REFERENCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getType())) {
            $out->{self::FIELD_TYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getDefaultValueBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_BASE_64BINARY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBase64Binary::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_BASE_64BINARY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_CODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_INSTANT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_INSTANT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_MARKDOWN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_MARKDOWN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueOid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_OID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIROid::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_OID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValuePositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_UNSIGNED_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_UNSIGNED_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFAULT_VALUE_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFAULT_VALUE_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefaultValueAddress())) {
            $out->{self::FIELD_DEFAULT_VALUE_ADDRESS} = $v;
        }
        if (null !== ($v = $this->getDefaultValueAge())) {
            $out->{self::FIELD_DEFAULT_VALUE_AGE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueAnnotation())) {
            $out->{self::FIELD_DEFAULT_VALUE_ANNOTATION} = $v;
        }
        if (null !== ($v = $this->getDefaultValueAttachment())) {
            $out->{self::FIELD_DEFAULT_VALUE_ATTACHMENT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueCodeableConcept())) {
            $out->{self::FIELD_DEFAULT_VALUE_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueCoding())) {
            $out->{self::FIELD_DEFAULT_VALUE_CODING} = $v;
        }
        if (null !== ($v = $this->getDefaultValueContactPoint())) {
            $out->{self::FIELD_DEFAULT_VALUE_CONTACT_POINT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueCount())) {
            $out->{self::FIELD_DEFAULT_VALUE_COUNT} = $v;
        }
        if (null !== ($v = $this->getDefaultValueDistance())) {
            $out->{self::FIELD_DEFAULT_VALUE_DISTANCE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueDuration())) {
            $out->{self::FIELD_DEFAULT_VALUE_DURATION} = $v;
        }
        if (null !== ($v = $this->getDefaultValueHumanName())) {
            $out->{self::FIELD_DEFAULT_VALUE_HUMAN_NAME} = $v;
        }
        if (null !== ($v = $this->getDefaultValueIdentifier())) {
            $out->{self::FIELD_DEFAULT_VALUE_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getDefaultValueMoney())) {
            $out->{self::FIELD_DEFAULT_VALUE_MONEY} = $v;
        }
        if (null !== ($v = $this->getDefaultValuePeriod())) {
            $out->{self::FIELD_DEFAULT_VALUE_PERIOD} = $v;
        }
        if (null !== ($v = $this->getDefaultValueQuantity())) {
            $out->{self::FIELD_DEFAULT_VALUE_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getDefaultValueRange())) {
            $out->{self::FIELD_DEFAULT_VALUE_RANGE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueRatio())) {
            $out->{self::FIELD_DEFAULT_VALUE_RATIO} = $v;
        }
        if (null !== ($v = $this->getDefaultValueReference())) {
            $out->{self::FIELD_DEFAULT_VALUE_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueSampledData())) {
            $out->{self::FIELD_DEFAULT_VALUE_SAMPLED_DATA} = $v;
        }
        if (null !== ($v = $this->getDefaultValueSignature())) {
            $out->{self::FIELD_DEFAULT_VALUE_SIGNATURE} = $v;
        }
        if (null !== ($v = $this->getDefaultValueTiming())) {
            $out->{self::FIELD_DEFAULT_VALUE_TIMING} = $v;
        }
        if (null !== ($v = $this->getDefaultValueMeta())) {
            $out->{self::FIELD_DEFAULT_VALUE_META} = $v;
        }
        if (null !== ($v = $this->getMeaningWhenMissing())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MEANING_WHEN_MISSING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MEANING_WHEN_MISSING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOrderMeaning())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ORDER_MEANING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ORDER_MEANING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_BASE_64BINARY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBase64Binary::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_BASE_64BINARY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_CODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedInstant())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_INSTANT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_INSTANT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_MARKDOWN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_MARKDOWN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedOid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_OID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIROid::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_OID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedPositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_UNSIGNED_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_UNSIGNED_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIXED_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIXED_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFixedAddress())) {
            $out->{self::FIELD_FIXED_ADDRESS} = $v;
        }
        if (null !== ($v = $this->getFixedAge())) {
            $out->{self::FIELD_FIXED_AGE} = $v;
        }
        if (null !== ($v = $this->getFixedAnnotation())) {
            $out->{self::FIELD_FIXED_ANNOTATION} = $v;
        }
        if (null !== ($v = $this->getFixedAttachment())) {
            $out->{self::FIELD_FIXED_ATTACHMENT} = $v;
        }
        if (null !== ($v = $this->getFixedCodeableConcept())) {
            $out->{self::FIELD_FIXED_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getFixedCoding())) {
            $out->{self::FIELD_FIXED_CODING} = $v;
        }
        if (null !== ($v = $this->getFixedContactPoint())) {
            $out->{self::FIELD_FIXED_CONTACT_POINT} = $v;
        }
        if (null !== ($v = $this->getFixedCount())) {
            $out->{self::FIELD_FIXED_COUNT} = $v;
        }
        if (null !== ($v = $this->getFixedDistance())) {
            $out->{self::FIELD_FIXED_DISTANCE} = $v;
        }
        if (null !== ($v = $this->getFixedDuration())) {
            $out->{self::FIELD_FIXED_DURATION} = $v;
        }
        if (null !== ($v = $this->getFixedHumanName())) {
            $out->{self::FIELD_FIXED_HUMAN_NAME} = $v;
        }
        if (null !== ($v = $this->getFixedIdentifier())) {
            $out->{self::FIELD_FIXED_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getFixedMoney())) {
            $out->{self::FIELD_FIXED_MONEY} = $v;
        }
        if (null !== ($v = $this->getFixedPeriod())) {
            $out->{self::FIELD_FIXED_PERIOD} = $v;
        }
        if (null !== ($v = $this->getFixedQuantity())) {
            $out->{self::FIELD_FIXED_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getFixedRange())) {
            $out->{self::FIELD_FIXED_RANGE} = $v;
        }
        if (null !== ($v = $this->getFixedRatio())) {
            $out->{self::FIELD_FIXED_RATIO} = $v;
        }
        if (null !== ($v = $this->getFixedReference())) {
            $out->{self::FIELD_FIXED_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getFixedSampledData())) {
            $out->{self::FIELD_FIXED_SAMPLED_DATA} = $v;
        }
        if (null !== ($v = $this->getFixedSignature())) {
            $out->{self::FIELD_FIXED_SIGNATURE} = $v;
        }
        if (null !== ($v = $this->getFixedTiming())) {
            $out->{self::FIELD_FIXED_TIMING} = $v;
        }
        if (null !== ($v = $this->getFixedMeta())) {
            $out->{self::FIELD_FIXED_META} = $v;
        }
        if (null !== ($v = $this->getPatternBase64Binary())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_BASE_64BINARY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBase64Binary::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_BASE_64BINARY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternCode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_CODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_CODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternInstant())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_INSTANT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_INSTANT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternMarkdown())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_MARKDOWN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_MARKDOWN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternOid())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_OID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIROid::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_OID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternPositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_UNSIGNED_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_UNSIGNED_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PATTERN_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PATTERN_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPatternAddress())) {
            $out->{self::FIELD_PATTERN_ADDRESS} = $v;
        }
        if (null !== ($v = $this->getPatternAge())) {
            $out->{self::FIELD_PATTERN_AGE} = $v;
        }
        if (null !== ($v = $this->getPatternAnnotation())) {
            $out->{self::FIELD_PATTERN_ANNOTATION} = $v;
        }
        if (null !== ($v = $this->getPatternAttachment())) {
            $out->{self::FIELD_PATTERN_ATTACHMENT} = $v;
        }
        if (null !== ($v = $this->getPatternCodeableConcept())) {
            $out->{self::FIELD_PATTERN_CODEABLE_CONCEPT} = $v;
        }
        if (null !== ($v = $this->getPatternCoding())) {
            $out->{self::FIELD_PATTERN_CODING} = $v;
        }
        if (null !== ($v = $this->getPatternContactPoint())) {
            $out->{self::FIELD_PATTERN_CONTACT_POINT} = $v;
        }
        if (null !== ($v = $this->getPatternCount())) {
            $out->{self::FIELD_PATTERN_COUNT} = $v;
        }
        if (null !== ($v = $this->getPatternDistance())) {
            $out->{self::FIELD_PATTERN_DISTANCE} = $v;
        }
        if (null !== ($v = $this->getPatternDuration())) {
            $out->{self::FIELD_PATTERN_DURATION} = $v;
        }
        if (null !== ($v = $this->getPatternHumanName())) {
            $out->{self::FIELD_PATTERN_HUMAN_NAME} = $v;
        }
        if (null !== ($v = $this->getPatternIdentifier())) {
            $out->{self::FIELD_PATTERN_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getPatternMoney())) {
            $out->{self::FIELD_PATTERN_MONEY} = $v;
        }
        if (null !== ($v = $this->getPatternPeriod())) {
            $out->{self::FIELD_PATTERN_PERIOD} = $v;
        }
        if (null !== ($v = $this->getPatternQuantity())) {
            $out->{self::FIELD_PATTERN_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getPatternRange())) {
            $out->{self::FIELD_PATTERN_RANGE} = $v;
        }
        if (null !== ($v = $this->getPatternRatio())) {
            $out->{self::FIELD_PATTERN_RATIO} = $v;
        }
        if (null !== ($v = $this->getPatternReference())) {
            $out->{self::FIELD_PATTERN_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getPatternSampledData())) {
            $out->{self::FIELD_PATTERN_SAMPLED_DATA} = $v;
        }
        if (null !== ($v = $this->getPatternSignature())) {
            $out->{self::FIELD_PATTERN_SIGNATURE} = $v;
        }
        if (null !== ($v = $this->getPatternTiming())) {
            $out->{self::FIELD_PATTERN_TIMING} = $v;
        }
        if (null !== ($v = $this->getPatternMeta())) {
            $out->{self::FIELD_PATTERN_META} = $v;
        }
        if ([] !== ($vs = $this->getExample())) {
            $out->{self::FIELD_EXAMPLE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_EXAMPLE}[] = $v;
            }
        }
        if (null !== ($v = $this->getMinValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN_VALUE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_VALUE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN_VALUE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_VALUE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN_VALUE_INSTANT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_VALUE_INSTANT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN_VALUE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_VALUE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN_VALUE_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_VALUE_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN_VALUE_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_VALUE_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinValuePositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN_VALUE_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_VALUE_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinValueUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MIN_VALUE_UNSIGNED_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MIN_VALUE_UNSIGNED_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMinValueQuantity())) {
            $out->{self::FIELD_MIN_VALUE_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getMaxValueDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_VALUE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_VALUE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxValueDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_VALUE_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_VALUE_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxValueInstant())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_VALUE_INSTANT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_VALUE_INSTANT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxValueTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_VALUE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_VALUE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxValueDecimal())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_VALUE_DECIMAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_VALUE_DECIMAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxValueInteger())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_VALUE_INTEGER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_VALUE_INTEGER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxValuePositiveInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_VALUE_POSITIVE_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_VALUE_POSITIVE_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxValueUnsignedInt())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_VALUE_UNSIGNED_INT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_VALUE_UNSIGNED_INT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxValueQuantity())) {
            $out->{self::FIELD_MAX_VALUE_QUANTITY} = $v;
        }
        if (null !== ($v = $this->getMaxLength())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_LENGTH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_LENGTH_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRId::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_CONDITION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONDITION_EXT} = $exts;
            }
        }
        if ([] !== ($vs = $this->getConstraint())) {
            $out->{self::FIELD_CONSTRAINT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONSTRAINT}[] = $v;
            }
        }
        if (null !== ($v = $this->getMustSupport())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MUST_SUPPORT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MUST_SUPPORT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIsModifier())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IS_MODIFIER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IS_MODIFIER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIsSummary())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_IS_SUMMARY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_IS_SUMMARY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getBinding())) {
            $out->{self::FIELD_BINDING} = $v;
        }
        if ([] !== ($vs = $this->getMapping())) {
            $out->{self::FIELD_MAPPING} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MAPPING}[] = $v;
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