<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

// if this class is used, assume not using Composer...

// constants
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConstants.php';
}

// config
if (!enum_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConfigKeyEnum.php';
}
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConfig.php';
}

// xml writer
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlWriter.php';
}

// interfaces
if (!interface_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeInterface.php';
}
if (!interface_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRPrimitiveTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRPrimitiveTypeInterface.php';
}
if (!interface_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRContainedTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRContainedTypeInterface.php';
}
if (!interface_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRCommentContainerInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerInterface.php';
}

// traits
if (!trait_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRCommentContainerTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerTrait.php';
}
if (!trait_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRValidationAssertionsTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRValidationAssertionsTrait.php';
}
if (!trait_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRChangeTrackingTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRChangeTrackingTrait.php';
}
if (!trait_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRSourceXmlNamespaceTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRSourceXmlNamespaceTrait.php';
}

// enums
if (!enum_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeEnum.php';
}
if (!enum_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRApiFormatEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRApiFormatEnum.php';
}
if (!enum_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRXmlLocationEnum.php';
}


// parser classes
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeMap', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeMap.php';
}
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRResponseParser', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRResponseParser.php';
}

// debug client
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRDebugClientResponse', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRDebugClientResponse.php';
}
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRDebugClient', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRDebugClient.php';
}

/**
 * Class PHPFHIRAutoloader
 * @package \DCarbone\PHPFHIRGenerated\DSTU2
 */
abstract class PHPFHIRAutoloader
{
    /** @var array */
    private const _CLASS_MAP = [
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRBase64BinaryPrimitive' => 'FHIRBase64BinaryPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRBooleanPrimitive' => 'FHIRBooleanPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRCodePrimitive' => 'FHIRCodePrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRDatePrimitive' => 'FHIRDatePrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRDateTimePrimitive' => 'FHIRDateTimePrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRDecimalPrimitive' => 'FHIRDecimalPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement' => 'FHIRElement.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAccountStatus' => 'FHIRElement/FHIRAccountStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRActionList' => 'FHIRElement/FHIRActionList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAddress' => 'FHIRElement/FHIRAddress.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAddressType' => 'FHIRElement/FHIRAddressType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAddressUse' => 'FHIRElement/FHIRAddressUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAdministrativeGender' => 'FHIRElement/FHIRAdministrativeGender.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAggregationMode' => 'FHIRElement/FHIRAggregationMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory' => 'FHIRElement/FHIRAllergyIntoleranceCategory.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty' => 'FHIRElement/FHIRAllergyIntoleranceCertainty.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality' => 'FHIRElement/FHIRAllergyIntoleranceCriticality.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity' => 'FHIRElement/FHIRAllergyIntoleranceSeverity.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus' => 'FHIRElement/FHIRAllergyIntoleranceStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceType' => 'FHIRElement/FHIRAllergyIntoleranceType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation' => 'FHIRElement/FHIRAnnotation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnswerFormat' => 'FHIRElement/FHIRAnswerFormat.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAppointmentStatus' => 'FHIRElement/FHIRAppointmentStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionDirectionType' => 'FHIRElement/FHIRAssertionDirectionType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionOperatorType' => 'FHIRElement/FHIRAssertionOperatorType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionResponseTypes' => 'FHIRElement/FHIRAssertionResponseTypes.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment' => 'FHIRElement/FHIRAttachment.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventAction' => 'FHIRElement/FHIRAuditEventAction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventOutcome' => 'FHIRElement/FHIRAuditEventOutcome.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventParticipantNetworkType' => 'FHIRElement/FHIRAuditEventParticipantNetworkType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement' => 'FHIRElement/FHIRBackboneElement.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction' => 'FHIRElement/FHIRBackboneElement/FHIRAllergyIntolerance/FHIRAllergyIntoleranceReaction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRAppointment/FHIRAppointmentParticipant.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventDetail.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventNetwork.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventObject' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventObject.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventParticipant.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource' => 'FHIRElement/FHIRBackboneElement/FHIRAuditEvent/FHIRAuditEventSource.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleEntry.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleLink.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch' => 'FHIRElement/FHIRBackboneElement/FHIRBundle/FHIRBundleSearch.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanActivity.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanDetail.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanParticipant.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanRelatedPlan' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanRelatedPlan.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAddItem.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication1' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication1.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication2' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication2.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication3' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication3.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication4' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseAdjudication4.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseCoverage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseDetail.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseDetail1.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseError.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseItem.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseNote.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail' => 'FHIRElement/FHIRBackboneElement/FHIRClaimResponse/FHIRClaimResponseSubDetail.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimCoverage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimDetail.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimDiagnosis.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimItem.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimMissingTeeth.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimPayee.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimProsthesis.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail' => 'FHIRElement/FHIRBackboneElement/FHIRClaim/FHIRClaimSubDetail.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding' => 'FHIRElement/FHIRBackboneElement/FHIRClinicalImpression/FHIRClinicalImpressionFinding.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations' => 'FHIRElement/FHIRBackboneElement/FHIRClinicalImpression/FHIRClinicalImpressionInvestigations.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut' => 'FHIRElement/FHIRBackboneElement/FHIRClinicalImpression/FHIRClinicalImpressionRuledOut.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload' => 'FHIRElement/FHIRBackboneElement/FHIRCommunicationRequest/FHIRCommunicationRequestPayload.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload' => 'FHIRElement/FHIRBackboneElement/FHIRCommunication/FHIRCommunicationPayload.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionAttester.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionSection.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapContact' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapDependsOn.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapElement.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapTarget.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionEvidence.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionStage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceCertificate.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceContact' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceDocument.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEndpoint' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceEndpoint.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceImplementation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceInteraction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction1' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceInteraction1.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceMessaging.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceOperation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceResource.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceRest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSearchParam.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSecurity.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSoftware.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractActor.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor1' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractActor1.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractFriendly.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractLegal.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractRule.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractSigner.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractTerm.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractValuedItem.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1' => 'FHIRElement/FHIRBackboneElement/FHIRContract/FHIRContractValuedItem1.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementContact' => 'FHIRElement/FHIRBackboneElement/FHIRDataElement/FHIRDataElementContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping' => 'FHIRElement/FHIRBackboneElement/FHIRDataElement/FHIRDataElementMapping.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation' => 'FHIRElement/FHIRBackboneElement/FHIRDetectedIssue/FHIRDetectedIssueMitigation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceComponent/FHIRDeviceComponentProductionSpecification.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceMetric/FHIRDeviceMetricCalibration.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderItem.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticReport/FHIRDiagnosticReportImage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentManifest/FHIRDocumentManifestContent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentManifest/FHIRDocumentManifestRelated.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceContent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceContext.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelated' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceRelated.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceRelatesTo.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterHospitalization.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterLocation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterParticipant.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterStatusHistory.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam' => 'FHIRElement/FHIRBackboneElement/FHIREpisodeOfCare/FHIREpisodeOfCareCareTeam.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory' => 'FHIRElement/FHIRBackboneElement/FHIREpisodeOfCare/FHIREpisodeOfCareStatusHistory.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition' => 'FHIRElement/FHIRBackboneElement/FHIRFamilyMemberHistory/FHIRFamilyMemberHistoryCondition.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalOutcome' => 'FHIRElement/FHIRBackboneElement/FHIRGoal/FHIRGoalOutcome.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic' => 'FHIRElement/FHIRBackboneElement/FHIRGroup/FHIRGroupCharacteristic.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember' => 'FHIRElement/FHIRBackboneElement/FHIRGroup/FHIRGroupMember.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime' => 'FHIRElement/FHIRBackboneElement/FHIRHealthcareService/FHIRHealthcareServiceAvailableTime.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable' => 'FHIRElement/FHIRBackboneElement/FHIRHealthcareService/FHIRHealthcareServiceNotAvailable.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType' => 'FHIRElement/FHIRBackboneElement/FHIRHealthcareService/FHIRHealthcareServiceServiceType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames' => 'FHIRElement/FHIRBackboneElement/FHIRImagingObjectSelection/FHIRImagingObjectSelectionFrames.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance' => 'FHIRElement/FHIRBackboneElement/FHIRImagingObjectSelection/FHIRImagingObjectSelectionInstance.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionSeries' => 'FHIRElement/FHIRBackboneElement/FHIRImagingObjectSelection/FHIRImagingObjectSelectionSeries.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy' => 'FHIRElement/FHIRBackboneElement/FHIRImagingObjectSelection/FHIRImagingObjectSelectionStudy.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance' => 'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudyInstance.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries' => 'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudySeries.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationDateCriterion.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationProtocol.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationRecommendation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationExplanation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationReaction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationVaccinationProtocol.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideContact' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideDependency.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideGlobal.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuidePackage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuidePage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource' => 'FHIRElement/FHIRBackboneElement/FHIRImplementationGuide/FHIRImplementationGuideResource.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry' => 'FHIRElement/FHIRBackboneElement/FHIRList/FHIRListEntry.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition' => 'FHIRElement/FHIRBackboneElement/FHIRLocation/FHIRLocationPosition.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationAdministration/FHIRMedicationAdministrationDosage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseDosageInstruction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseSubstitution.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationOrder/FHIRMedicationOrderDispenseRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationOrder/FHIRMedicationOrderDosageInstruction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationOrder/FHIRMedicationOrderSubstitution.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationStatement/FHIRMedicationStatementDosage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationBatch.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationContent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationIngredient.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationPackage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationProduct.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderDestination.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderSource.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemContact' => 'FHIRElement/FHIRBackboneElement/FHIRNamingSystem/FHIRNamingSystemContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId' => 'FHIRElement/FHIRBackboneElement/FHIRNamingSystem/FHIRNamingSystemUniqueId.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderAdministration.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderEnteralFormula.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderNutrient.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderOralDiet.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderSupplement.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture' => 'FHIRElement/FHIRBackboneElement/FHIRNutritionOrder/FHIRNutritionOrderTexture.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationComponent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationReferenceRange.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationRelated.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding' => 'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionBinding.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact' => 'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter' => 'FHIRElement/FHIRBackboneElement/FHIROperationDefinition/FHIROperationDefinitionParameter.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue' => 'FHIRElement/FHIRBackboneElement/FHIROperationOutcome/FHIROperationOutcomeIssue.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROrder\FHIROrderWhen' => 'FHIRElement/FHIRBackboneElement/FHIROrder/FHIROrderWhen.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact' => 'FHIRElement/FHIRBackboneElement/FHIROrganization/FHIROrganizationContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter' => 'FHIRElement/FHIRBackboneElement/FHIRParameters/FHIRParametersParameter.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientAnimal.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientCommunication.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientLink.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail' => 'FHIRElement/FHIRBackboneElement/FHIRPaymentReconciliation/FHIRPaymentReconciliationDetail.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationNote' => 'FHIRElement/FHIRBackboneElement/FHIRPaymentReconciliation/FHIRPaymentReconciliationNote.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink' => 'FHIRElement/FHIRBackboneElement/FHIRPerson/FHIRPersonLink.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerPractitionerRole' => 'FHIRElement/FHIRBackboneElement/FHIRPractitioner/FHIRPractitionerPractitionerRole.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification' => 'FHIRElement/FHIRBackboneElement/FHIRPractitioner/FHIRPractitionerQualification.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice' => 'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedureFocalDevice.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer' => 'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedurePerformer.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem' => 'FHIRElement/FHIRBackboneElement/FHIRProcessRequest/FHIRProcessRequestItem.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseNotes' => 'FHIRElement/FHIRBackboneElement/FHIRProcessResponse/FHIRProcessResponseNotes.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceAgent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceEntity.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceRelatedAgent' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceRelatedAgent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaireResponse/FHIRQuestionnaireResponseAnswer.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaireResponse/FHIRQuestionnaireResponseGroup.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseQuestion' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaireResponse/FHIRQuestionnaireResponseQuestion.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireGroup.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireQuestion.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction' => 'FHIRElement/FHIRBackboneElement/FHIRRiskAssessment/FHIRRiskAssessmentPrediction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterContact' => 'FHIRElement/FHIRBackboneElement/FHIRSearchParameter/FHIRSearchParameterContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenCollection.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenContainer.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenTreatment.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContact' => 'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential' => 'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionDifferential.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping' => 'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionMapping.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot' => 'FHIRElement/FHIRBackboneElement/FHIRStructureDefinition/FHIRStructureDefinitionSnapshot.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel' => 'FHIRElement/FHIRBackboneElement/FHIRSubscription/FHIRSubscriptionChannel.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient' => 'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceIngredient.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance' => 'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceInstance.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestWhen' => 'FHIRElement/FHIRBackboneElement/FHIRSupplyRequest/FHIRSupplyRequestWhen.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction1' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAction1.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction2' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAction2.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptAssert.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptCapability.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptContact' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptFixture.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptLink' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptLink.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptMetadata.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptOperation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptRequestHeader.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptSetup.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptTeardown.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptTest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable' => 'FHIRElement/FHIRBackboneElement/FHIRTestScript/FHIRTestScriptVariable.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCodeSystem' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetCodeSystem.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetCompose.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetConcept.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetConcept1.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContact' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetContains.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetDesignation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetExpansion.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetFilter.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetInclude.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetParameter.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense' => 'FHIRElement/FHIRBackboneElement/FHIRVisionPrescription/FHIRVisionPrescriptionDispense.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary' => 'FHIRElement/FHIRBase64Binary.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBindingStrength' => 'FHIRElement/FHIRBindingStrength.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean' => 'FHIRElement/FHIRBoolean.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBundleType' => 'FHIRElement/FHIRBundleType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCarePlanActivityStatus' => 'FHIRElement/FHIRCarePlanActivityStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCarePlanRelationship' => 'FHIRElement/FHIRCarePlanRelationship.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCarePlanStatus' => 'FHIRElement/FHIRCarePlanStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClaimType' => 'FHIRElement/FHIRClaimType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClinicalImpressionStatus' => 'FHIRElement/FHIRClinicalImpressionStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode' => 'FHIRElement/FHIRCode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept' => 'FHIRElement/FHIRCodeableConcept.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding' => 'FHIRElement/FHIRCoding.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCommunicationRequestStatus' => 'FHIRElement/FHIRCommunicationRequestStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCommunicationStatus' => 'FHIRElement/FHIRCommunicationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCompositionAttestationMode' => 'FHIRElement/FHIRCompositionAttestationMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCompositionStatus' => 'FHIRElement/FHIRCompositionStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConceptMapEquivalence' => 'FHIRElement/FHIRConceptMapEquivalence.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConditionalDeleteStatus' => 'FHIRElement/FHIRConditionalDeleteStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConditionVerificationStatus' => 'FHIRElement/FHIRConditionVerificationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceEventMode' => 'FHIRElement/FHIRConformanceEventMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceResourceStatus' => 'FHIRElement/FHIRConformanceResourceStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceStatementKind' => 'FHIRElement/FHIRConformanceStatementKind.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConstraintSeverity' => 'FHIRElement/FHIRConstraintSeverity.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint' => 'FHIRElement/FHIRContactPoint.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPointSystem' => 'FHIRElement/FHIRContactPointSystem.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPointUse' => 'FHIRElement/FHIRContactPointUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType' => 'FHIRElement/FHIRContentType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDataElementStringency' => 'FHIRElement/FHIRDataElementStringency.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate' => 'FHIRElement/FHIRDate.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime' => 'FHIRElement/FHIRDateTime.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDaysOfWeek' => 'FHIRElement/FHIRDaysOfWeek.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal' => 'FHIRElement/FHIRDecimal.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDetectedIssueSeverity' => 'FHIRElement/FHIRDetectedIssueSeverity.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricCalibrationState' => 'FHIRElement/FHIRDeviceMetricCalibrationState.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricCalibrationType' => 'FHIRElement/FHIRDeviceMetricCalibrationType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricCategory' => 'FHIRElement/FHIRDeviceMetricCategory.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricColor' => 'FHIRElement/FHIRDeviceMetricColor.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricOperationalStatus' => 'FHIRElement/FHIRDeviceMetricOperationalStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceStatus' => 'FHIRElement/FHIRDeviceStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestPriority' => 'FHIRElement/FHIRDeviceUseRequestPriority.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestStatus' => 'FHIRElement/FHIRDeviceUseRequestStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticOrderPriority' => 'FHIRElement/FHIRDiagnosticOrderPriority.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticOrderStatus' => 'FHIRElement/FHIRDiagnosticOrderStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticReportStatus' => 'FHIRElement/FHIRDiagnosticReportStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDigitalMediaType' => 'FHIRElement/FHIRDigitalMediaType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDocumentMode' => 'FHIRElement/FHIRDocumentMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDocumentReferenceStatus' => 'FHIRElement/FHIRDocumentReferenceStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDocumentRelationshipType' => 'FHIRElement/FHIRDocumentRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition' => 'FHIRElement/FHIRElementDefinition.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionBase.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionBinding.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionConstraint.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionMapping.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionSlicing.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType' => 'FHIRElement/FHIRElementDefinition/FHIRElementDefinitionType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterClass' => 'FHIRElement/FHIREncounterClass.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterLocationStatus' => 'FHIRElement/FHIREncounterLocationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterState' => 'FHIRElement/FHIREncounterState.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREpisodeOfCareStatus' => 'FHIRElement/FHIREpisodeOfCareStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREventTiming' => 'FHIRElement/FHIREventTiming.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension' => 'FHIRElement/FHIRExtension.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtensionContext' => 'FHIRElement/FHIRExtensionContext.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFamilyHistoryStatus' => 'FHIRElement/FHIRFamilyHistoryStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFilterOperator' => 'FHIRElement/FHIRFilterOperator.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFlagStatus' => 'FHIRElement/FHIRFlagStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGoalStatus' => 'FHIRElement/FHIRGoalStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGroupType' => 'FHIRElement/FHIRGroupType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuideDependencyType' => 'FHIRElement/FHIRGuideDependencyType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuidePageKind' => 'FHIRElement/FHIRGuidePageKind.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuideResourcePurpose' => 'FHIRElement/FHIRGuideResourcePurpose.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHTTPVerb' => 'FHIRElement/FHIRHTTPVerb.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHumanName' => 'FHIRElement/FHIRHumanName.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId' => 'FHIRElement/FHIRId.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier' => 'FHIRElement/FHIRIdentifier.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifierUse' => 'FHIRElement/FHIRIdentifierUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentityAssuranceLevel' => 'FHIRElement/FHIRIdentityAssuranceLevel.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstanceAvailability' => 'FHIRElement/FHIRInstanceAvailability.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant' => 'FHIRElement/FHIRInstant.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger' => 'FHIRElement/FHIRInteger.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIssueSeverity' => 'FHIRElement/FHIRIssueSeverity.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIssueType' => 'FHIRElement/FHIRIssueType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRLinkType' => 'FHIRElement/FHIRLinkType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRListMode' => 'FHIRElement/FHIRListMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRListStatus' => 'FHIRElement/FHIRListStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRLocationMode' => 'FHIRElement/FHIRLocationMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRLocationStatus' => 'FHIRElement/FHIRLocationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMarkdown' => 'FHIRElement/FHIRMarkdown.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle' => 'FHIRElement/FHIRMeasmnt_Principle.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus' => 'FHIRElement/FHIRMedicationAdministrationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationDispenseStatus' => 'FHIRElement/FHIRMedicationDispenseStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationOrderStatus' => 'FHIRElement/FHIRMedicationOrderStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationStatementStatus' => 'FHIRElement/FHIRMedicationStatementStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMessageSignificanceCategory' => 'FHIRElement/FHIRMessageSignificanceCategory.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta' => 'FHIRElement/FHIRMeta.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNameUse' => 'FHIRElement/FHIRNameUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNamingSystemIdentifierType' => 'FHIRElement/FHIRNamingSystemIdentifierType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNamingSystemType' => 'FHIRElement/FHIRNamingSystemType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNarrative' => 'FHIRElement/FHIRNarrative.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNarrativeStatus' => 'FHIRElement/FHIRNarrativeStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNoteType' => 'FHIRElement/FHIRNoteType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNutritionOrderStatus' => 'FHIRElement/FHIRNutritionOrderStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRObservationRelationshipType' => 'FHIRElement/FHIRObservationRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRObservationStatus' => 'FHIRElement/FHIRObservationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid' => 'FHIRElement/FHIROid.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROperationKind' => 'FHIRElement/FHIROperationKind.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROperationParameterUse' => 'FHIRElement/FHIROperationParameterUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROrderStatus' => 'FHIRElement/FHIROrderStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRParticipantRequired' => 'FHIRElement/FHIRParticipantRequired.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRParticipantStatus' => 'FHIRElement/FHIRParticipantStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRParticipationStatus' => 'FHIRElement/FHIRParticipationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod' => 'FHIRElement/FHIRPeriod.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt' => 'FHIRElement/FHIRPositiveInt.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestPriority' => 'FHIRElement/FHIRProcedureRequestPriority.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestStatus' => 'FHIRElement/FHIRProcedureRequestStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureStatus' => 'FHIRElement/FHIRProcedureStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPropertyRepresentation' => 'FHIRElement/FHIRPropertyRepresentation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProvenanceEntityRole' => 'FHIRElement/FHIRProvenanceEntityRole.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity' => 'FHIRElement/FHIRQuantity.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantityComparator' => 'FHIRElement/FHIRQuantityComparator.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRAge' => 'FHIRElement/FHIRQuantity/FHIRAge.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRCount' => 'FHIRElement/FHIRQuantity/FHIRCount.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDistance' => 'FHIRElement/FHIRQuantity/FHIRDistance.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration' => 'FHIRElement/FHIRQuantity/FHIRDuration.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney' => 'FHIRElement/FHIRQuantity/FHIRMoney.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity' => 'FHIRElement/FHIRQuantity/FHIRSimpleQuantity.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuestionnaireResponseStatus' => 'FHIRElement/FHIRQuestionnaireResponseStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuestionnaireStatus' => 'FHIRElement/FHIRQuestionnaireStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange' => 'FHIRElement/FHIRRange.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio' => 'FHIRElement/FHIRRatio.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference' => 'FHIRElement/FHIRReference.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReferralStatus' => 'FHIRElement/FHIRReferralStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRemittanceOutcome' => 'FHIRElement/FHIRRemittanceOutcome.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRResourceVersionPolicy' => 'FHIRElement/FHIRResourceVersionPolicy.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRResponseType' => 'FHIRElement/FHIRResponseType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRestfulConformanceMode' => 'FHIRElement/FHIRRestfulConformanceMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledData' => 'FHIRElement/FHIRSampledData.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledDataDataType' => 'FHIRElement/FHIRSampledDataDataType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSearchEntryMode' => 'FHIRElement/FHIRSearchEntryMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSearchModifierCode' => 'FHIRElement/FHIRSearchModifierCode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSearchParamType' => 'FHIRElement/FHIRSearchParamType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSignature' => 'FHIRElement/FHIRSignature.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSlicingRules' => 'FHIRElement/FHIRSlicingRules.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSlotStatus' => 'FHIRElement/FHIRSlotStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSpecimenStatus' => 'FHIRElement/FHIRSpecimenStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString' => 'FHIRElement/FHIRString.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRStructureDefinitionKind' => 'FHIRElement/FHIRStructureDefinitionKind.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSubscriptionChannelType' => 'FHIRElement/FHIRSubscriptionChannelType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSubscriptionStatus' => 'FHIRElement/FHIRSubscriptionStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSupplyDeliveryStatus' => 'FHIRElement/FHIRSupplyDeliveryStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSupplyRequestStatus' => 'FHIRElement/FHIRSupplyRequestStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSystemRestfulInteraction' => 'FHIRElement/FHIRSystemRestfulInteraction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTime' => 'FHIRElement/FHIRTime.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming' => 'FHIRElement/FHIRTiming.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat' => 'FHIRElement/FHIRTiming/FHIRTimingRepeat.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTransactionMode' => 'FHIRElement/FHIRTransactionMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTypeRestfulInteraction' => 'FHIRElement/FHIRTypeRestfulInteraction.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnitsOfTime' => 'FHIRElement/FHIRUnitsOfTime.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnknownContentCode' => 'FHIRElement/FHIRUnknownContentCode.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt' => 'FHIRElement/FHIRUnsignedInt.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri' => 'FHIRElement/FHIRUri.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUse' => 'FHIRElement/FHIRUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUuid' => 'FHIRElement/FHIRUuid.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionBase' => 'FHIRElement/FHIRVisionBase.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionEyes' => 'FHIRElement/FHIRVisionEyes.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRXPathUsageType' => 'FHIRElement/FHIRXPathUsageType.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive' => 'FHIRIdPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRInstantPrimitive' => 'FHIRInstantPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRIntegerPrimitive' => 'FHIRIntegerPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRMarkdownPrimitive' => 'FHIRMarkdownPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIROidPrimitive' => 'FHIROidPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRPositiveIntPrimitive' => 'FHIRPositiveIntPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource' => 'FHIRResource.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResourceContainer' => 'FHIRResourceContainer.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRBinary' => 'FHIRResource/FHIRBinary.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRBundle' => 'FHIRResource/FHIRBundle.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource' => 'FHIRResource/FHIRDomainResource.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAccount' => 'FHIRResource/FHIRDomainResource/FHIRAccount.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance' => 'FHIRResource/FHIRDomainResource/FHIRAllergyIntolerance.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAppointment' => 'FHIRResource/FHIRDomainResource/FHIRAppointment.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse' => 'FHIRResource/FHIRDomainResource/FHIRAppointmentResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAuditEvent' => 'FHIRResource/FHIRDomainResource/FHIRAuditEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRBasic' => 'FHIRResource/FHIRDomainResource/FHIRBasic.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRBodySite' => 'FHIRResource/FHIRDomainResource/FHIRBodySite.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCarePlan' => 'FHIRResource/FHIRDomainResource/FHIRCarePlan.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim' => 'FHIRResource/FHIRDomainResource/FHIRClaim.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse' => 'FHIRResource/FHIRDomainResource/FHIRClaimResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClinicalImpression' => 'FHIRResource/FHIRDomainResource/FHIRClinicalImpression.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCommunication' => 'FHIRResource/FHIRDomainResource/FHIRCommunication.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest' => 'FHIRResource/FHIRDomainResource/FHIRCommunicationRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRComposition' => 'FHIRResource/FHIRDomainResource/FHIRComposition.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRConceptMap' => 'FHIRResource/FHIRDomainResource/FHIRConceptMap.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCondition' => 'FHIRResource/FHIRDomainResource/FHIRCondition.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRConformance' => 'FHIRResource/FHIRDomainResource/FHIRConformance.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRContract' => 'FHIRResource/FHIRDomainResource/FHIRContract.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCoverage' => 'FHIRResource/FHIRDomainResource/FHIRCoverage.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDataElement' => 'FHIRResource/FHIRDomainResource/FHIRDataElement.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDetectedIssue' => 'FHIRResource/FHIRDomainResource/FHIRDetectedIssue.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDevice' => 'FHIRResource/FHIRDomainResource/FHIRDevice.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent' => 'FHIRResource/FHIRDomainResource/FHIRDeviceComponent.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceMetric' => 'FHIRResource/FHIRDomainResource/FHIRDeviceMetric.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest' => 'FHIRResource/FHIRDomainResource/FHIRDeviceUseRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement' => 'FHIRResource/FHIRDomainResource/FHIRDeviceUseStatement.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticOrder' => 'FHIRResource/FHIRDomainResource/FHIRDiagnosticOrder.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport' => 'FHIRResource/FHIRDomainResource/FHIRDiagnosticReport.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDocumentManifest' => 'FHIRResource/FHIRDomainResource/FHIRDocumentManifest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDocumentReference' => 'FHIRResource/FHIRDomainResource/FHIRDocumentReference.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREligibilityRequest' => 'FHIRResource/FHIRDomainResource/FHIREligibilityRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREligibilityResponse' => 'FHIRResource/FHIRDomainResource/FHIREligibilityResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREncounter' => 'FHIRResource/FHIRDomainResource/FHIREncounter.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest' => 'FHIRResource/FHIRDomainResource/FHIREnrollmentRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse' => 'FHIRResource/FHIRDomainResource/FHIREnrollmentResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare' => 'FHIRResource/FHIRDomainResource/FHIREpisodeOfCare.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit' => 'FHIRResource/FHIRDomainResource/FHIRExplanationOfBenefit.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory' => 'FHIRResource/FHIRDomainResource/FHIRFamilyMemberHistory.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRFlag' => 'FHIRResource/FHIRDomainResource/FHIRFlag.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRGoal' => 'FHIRResource/FHIRDomainResource/FHIRGoal.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRGroup' => 'FHIRResource/FHIRDomainResource/FHIRGroup.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRHealthcareService' => 'FHIRResource/FHIRDomainResource/FHIRHealthcareService.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection' => 'FHIRResource/FHIRDomainResource/FHIRImagingObjectSelection.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingStudy' => 'FHIRResource/FHIRDomainResource/FHIRImagingStudy.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImmunization' => 'FHIRResource/FHIRDomainResource/FHIRImmunization.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation' => 'FHIRResource/FHIRDomainResource/FHIRImmunizationRecommendation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImplementationGuide' => 'FHIRResource/FHIRDomainResource/FHIRImplementationGuide.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRList' => 'FHIRResource/FHIRDomainResource/FHIRList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRLocation' => 'FHIRResource/FHIRDomainResource/FHIRLocation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedia' => 'FHIRResource/FHIRDomainResource/FHIRMedia.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedication' => 'FHIRResource/FHIRDomainResource/FHIRMedication.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration' => 'FHIRResource/FHIRDomainResource/FHIRMedicationAdministration.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationDispense' => 'FHIRResource/FHIRDomainResource/FHIRMedicationDispense.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationOrder' => 'FHIRResource/FHIRDomainResource/FHIRMedicationOrder.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationStatement' => 'FHIRResource/FHIRDomainResource/FHIRMedicationStatement.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMessageHeader' => 'FHIRResource/FHIRDomainResource/FHIRMessageHeader.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRNamingSystem' => 'FHIRResource/FHIRDomainResource/FHIRNamingSystem.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRNutritionOrder' => 'FHIRResource/FHIRDomainResource/FHIRNutritionOrder.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRObservation' => 'FHIRResource/FHIRDomainResource/FHIRObservation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationDefinition' => 'FHIRResource/FHIRDomainResource/FHIROperationDefinition.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationOutcome' => 'FHIRResource/FHIRDomainResource/FHIROperationOutcome.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROrder' => 'FHIRResource/FHIRDomainResource/FHIROrder.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROrderResponse' => 'FHIRResource/FHIRDomainResource/FHIROrderResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROrganization' => 'FHIRResource/FHIRDomainResource/FHIROrganization.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPatient' => 'FHIRResource/FHIRDomainResource/FHIRPatient.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPaymentNotice' => 'FHIRResource/FHIRDomainResource/FHIRPaymentNotice.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation' => 'FHIRResource/FHIRDomainResource/FHIRPaymentReconciliation.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPerson' => 'FHIRResource/FHIRDomainResource/FHIRPerson.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPractitioner' => 'FHIRResource/FHIRDomainResource/FHIRPractitioner.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedure' => 'FHIRResource/FHIRDomainResource/FHIRProcedure.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedureRequest' => 'FHIRResource/FHIRDomainResource/FHIRProcedureRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcessRequest' => 'FHIRResource/FHIRDomainResource/FHIRProcessRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcessResponse' => 'FHIRResource/FHIRDomainResource/FHIRProcessResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProvenance' => 'FHIRResource/FHIRDomainResource/FHIRProvenance.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRQuestionnaire' => 'FHIRResource/FHIRDomainResource/FHIRQuestionnaire.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse' => 'FHIRResource/FHIRDomainResource/FHIRQuestionnaireResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRReferralRequest' => 'FHIRResource/FHIRDomainResource/FHIRReferralRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRRelatedPerson' => 'FHIRResource/FHIRDomainResource/FHIRRelatedPerson.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRRiskAssessment' => 'FHIRResource/FHIRDomainResource/FHIRRiskAssessment.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSchedule' => 'FHIRResource/FHIRDomainResource/FHIRSchedule.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSearchParameter' => 'FHIRResource/FHIRDomainResource/FHIRSearchParameter.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSlot' => 'FHIRResource/FHIRDomainResource/FHIRSlot.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSpecimen' => 'FHIRResource/FHIRDomainResource/FHIRSpecimen.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRStructureDefinition' => 'FHIRResource/FHIRDomainResource/FHIRStructureDefinition.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSubscription' => 'FHIRResource/FHIRDomainResource/FHIRSubscription.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSubstance' => 'FHIRResource/FHIRDomainResource/FHIRSubstance.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery' => 'FHIRResource/FHIRDomainResource/FHIRSupplyDelivery.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyRequest' => 'FHIRResource/FHIRDomainResource/FHIRSupplyRequest.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRTestScript' => 'FHIRResource/FHIRDomainResource/FHIRTestScript.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRValueSet' => 'FHIRResource/FHIRDomainResource/FHIRValueSet.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRVisionPrescription' => 'FHIRResource/FHIRDomainResource/FHIRVisionPrescription.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRParameters' => 'FHIRResource/FHIRParameters.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRSampledDataDataTypePrimitive' => 'FHIRSampledDataDataTypePrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive' => 'FHIRStringPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAccountStatusList' => 'FHIRStringPrimitive/FHIRAccountStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRActionListList' => 'FHIRStringPrimitive/FHIRActionListList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAddressTypeList' => 'FHIRStringPrimitive/FHIRAddressTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAddressUseList' => 'FHIRStringPrimitive/FHIRAddressUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAdministrativeGenderList' => 'FHIRStringPrimitive/FHIRAdministrativeGenderList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAggregationModeList' => 'FHIRStringPrimitive/FHIRAggregationModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceCategoryList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceCategoryList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceCertaintyList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceCertaintyList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceCriticalityList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceCriticalityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceSeverityList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceSeverityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceStatusList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceTypeList' => 'FHIRStringPrimitive/FHIRAllergyIntoleranceTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAnswerFormatList' => 'FHIRStringPrimitive/FHIRAnswerFormatList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAppointmentStatusList' => 'FHIRStringPrimitive/FHIRAppointmentStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAssertionDirectionTypeList' => 'FHIRStringPrimitive/FHIRAssertionDirectionTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAssertionOperatorTypeList' => 'FHIRStringPrimitive/FHIRAssertionOperatorTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAssertionResponseTypesList' => 'FHIRStringPrimitive/FHIRAssertionResponseTypesList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAuditEventActionList' => 'FHIRStringPrimitive/FHIRAuditEventActionList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAuditEventOutcomeList' => 'FHIRStringPrimitive/FHIRAuditEventOutcomeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAuditEventParticipantNetworkTypeList' => 'FHIRStringPrimitive/FHIRAuditEventParticipantNetworkTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRBindingStrengthList' => 'FHIRStringPrimitive/FHIRBindingStrengthList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRBundleTypeList' => 'FHIRStringPrimitive/FHIRBundleTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCarePlanActivityStatusList' => 'FHIRStringPrimitive/FHIRCarePlanActivityStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCarePlanRelationshipList' => 'FHIRStringPrimitive/FHIRCarePlanRelationshipList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCarePlanStatusList' => 'FHIRStringPrimitive/FHIRCarePlanStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRClaimTypeList' => 'FHIRStringPrimitive/FHIRClaimTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRClinicalImpressionStatusList' => 'FHIRStringPrimitive/FHIRClinicalImpressionStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCommunicationRequestStatusList' => 'FHIRStringPrimitive/FHIRCommunicationRequestStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCommunicationStatusList' => 'FHIRStringPrimitive/FHIRCommunicationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCompositionAttestationModeList' => 'FHIRStringPrimitive/FHIRCompositionAttestationModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCompositionStatusList' => 'FHIRStringPrimitive/FHIRCompositionStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConceptMapEquivalenceList' => 'FHIRStringPrimitive/FHIRConceptMapEquivalenceList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConditionalDeleteStatusList' => 'FHIRStringPrimitive/FHIRConditionalDeleteStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConditionVerificationStatusList' => 'FHIRStringPrimitive/FHIRConditionVerificationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConformanceEventModeList' => 'FHIRStringPrimitive/FHIRConformanceEventModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConformanceResourceStatusList' => 'FHIRStringPrimitive/FHIRConformanceResourceStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConformanceStatementKindList' => 'FHIRStringPrimitive/FHIRConformanceStatementKindList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConstraintSeverityList' => 'FHIRStringPrimitive/FHIRConstraintSeverityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRContactPointSystemList' => 'FHIRStringPrimitive/FHIRContactPointSystemList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRContactPointUseList' => 'FHIRStringPrimitive/FHIRContactPointUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRContentTypeList' => 'FHIRStringPrimitive/FHIRContentTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDataElementStringencyList' => 'FHIRStringPrimitive/FHIRDataElementStringencyList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDaysOfWeekList' => 'FHIRStringPrimitive/FHIRDaysOfWeekList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDetectedIssueSeverityList' => 'FHIRStringPrimitive/FHIRDetectedIssueSeverityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricCalibrationStateList' => 'FHIRStringPrimitive/FHIRDeviceMetricCalibrationStateList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricCalibrationTypeList' => 'FHIRStringPrimitive/FHIRDeviceMetricCalibrationTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricCategoryList' => 'FHIRStringPrimitive/FHIRDeviceMetricCategoryList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricColorList' => 'FHIRStringPrimitive/FHIRDeviceMetricColorList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricOperationalStatusList' => 'FHIRStringPrimitive/FHIRDeviceMetricOperationalStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceStatusList' => 'FHIRStringPrimitive/FHIRDeviceStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceUseRequestPriorityList' => 'FHIRStringPrimitive/FHIRDeviceUseRequestPriorityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceUseRequestStatusList' => 'FHIRStringPrimitive/FHIRDeviceUseRequestStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList' => 'FHIRStringPrimitive/FHIRDiagnosticOrderPriorityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList' => 'FHIRStringPrimitive/FHIRDiagnosticOrderStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDiagnosticReportStatusList' => 'FHIRStringPrimitive/FHIRDiagnosticReportStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDigitalMediaTypeList' => 'FHIRStringPrimitive/FHIRDigitalMediaTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDocumentModeList' => 'FHIRStringPrimitive/FHIRDocumentModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDocumentReferenceStatusList' => 'FHIRStringPrimitive/FHIRDocumentReferenceStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDocumentRelationshipTypeList' => 'FHIRStringPrimitive/FHIRDocumentRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREncounterClassList' => 'FHIRStringPrimitive/FHIREncounterClassList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREncounterLocationStatusList' => 'FHIRStringPrimitive/FHIREncounterLocationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREncounterStateList' => 'FHIRStringPrimitive/FHIREncounterStateList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREpisodeOfCareStatusList' => 'FHIRStringPrimitive/FHIREpisodeOfCareStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREventTimingList' => 'FHIRStringPrimitive/FHIREventTimingList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRExtensionContextList' => 'FHIRStringPrimitive/FHIRExtensionContextList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRFamilyHistoryStatusList' => 'FHIRStringPrimitive/FHIRFamilyHistoryStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRFilterOperatorList' => 'FHIRStringPrimitive/FHIRFilterOperatorList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRFlagStatusList' => 'FHIRStringPrimitive/FHIRFlagStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGoalStatusList' => 'FHIRStringPrimitive/FHIRGoalStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGroupTypeList' => 'FHIRStringPrimitive/FHIRGroupTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGuideDependencyTypeList' => 'FHIRStringPrimitive/FHIRGuideDependencyTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGuidePageKindList' => 'FHIRStringPrimitive/FHIRGuidePageKindList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGuideResourcePurposeList' => 'FHIRStringPrimitive/FHIRGuideResourcePurposeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRHTTPVerbList' => 'FHIRStringPrimitive/FHIRHTTPVerbList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRIdentifierUseList' => 'FHIRStringPrimitive/FHIRIdentifierUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRIdentityAssuranceLevelList' => 'FHIRStringPrimitive/FHIRIdentityAssuranceLevelList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRInstanceAvailabilityList' => 'FHIRStringPrimitive/FHIRInstanceAvailabilityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRIssueSeverityList' => 'FHIRStringPrimitive/FHIRIssueSeverityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRIssueTypeList' => 'FHIRStringPrimitive/FHIRIssueTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRLinkTypeList' => 'FHIRStringPrimitive/FHIRLinkTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRListModeList' => 'FHIRStringPrimitive/FHIRListModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRListStatusList' => 'FHIRStringPrimitive/FHIRListStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRLocationModeList' => 'FHIRStringPrimitive/FHIRLocationModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRLocationStatusList' => 'FHIRStringPrimitive/FHIRLocationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMeasmnt_PrincipleList' => 'FHIRStringPrimitive/FHIRMeasmnt_PrincipleList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList' => 'FHIRStringPrimitive/FHIRMedicationAdministrationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMedicationDispenseStatusList' => 'FHIRStringPrimitive/FHIRMedicationDispenseStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMedicationOrderStatusList' => 'FHIRStringPrimitive/FHIRMedicationOrderStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMedicationStatementStatusList' => 'FHIRStringPrimitive/FHIRMedicationStatementStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList' => 'FHIRStringPrimitive/FHIRMessageSignificanceCategoryList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNameUseList' => 'FHIRStringPrimitive/FHIRNameUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNamingSystemIdentifierTypeList' => 'FHIRStringPrimitive/FHIRNamingSystemIdentifierTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNamingSystemTypeList' => 'FHIRStringPrimitive/FHIRNamingSystemTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNarrativeStatusList' => 'FHIRStringPrimitive/FHIRNarrativeStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNoteTypeList' => 'FHIRStringPrimitive/FHIRNoteTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNutritionOrderStatusList' => 'FHIRStringPrimitive/FHIRNutritionOrderStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRObservationRelationshipTypeList' => 'FHIRStringPrimitive/FHIRObservationRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRObservationStatusList' => 'FHIRStringPrimitive/FHIRObservationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIROperationKindList' => 'FHIRStringPrimitive/FHIROperationKindList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIROperationParameterUseList' => 'FHIRStringPrimitive/FHIROperationParameterUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIROrderStatusList' => 'FHIRStringPrimitive/FHIROrderStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRParticipantRequiredList' => 'FHIRStringPrimitive/FHIRParticipantRequiredList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRParticipantStatusList' => 'FHIRStringPrimitive/FHIRParticipantStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRParticipationStatusList' => 'FHIRStringPrimitive/FHIRParticipationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRProcedureRequestPriorityList' => 'FHIRStringPrimitive/FHIRProcedureRequestPriorityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRProcedureRequestStatusList' => 'FHIRStringPrimitive/FHIRProcedureRequestStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRProcedureStatusList' => 'FHIRStringPrimitive/FHIRProcedureStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRPropertyRepresentationList' => 'FHIRStringPrimitive/FHIRPropertyRepresentationList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRProvenanceEntityRoleList' => 'FHIRStringPrimitive/FHIRProvenanceEntityRoleList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRQuantityComparatorList' => 'FHIRStringPrimitive/FHIRQuantityComparatorList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRQuestionnaireResponseStatusList' => 'FHIRStringPrimitive/FHIRQuestionnaireResponseStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRQuestionnaireStatusList' => 'FHIRStringPrimitive/FHIRQuestionnaireStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRReferralStatusList' => 'FHIRStringPrimitive/FHIRReferralStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRRemittanceOutcomeList' => 'FHIRStringPrimitive/FHIRRemittanceOutcomeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRResourceVersionPolicyList' => 'FHIRStringPrimitive/FHIRResourceVersionPolicyList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRResponseTypeList' => 'FHIRStringPrimitive/FHIRResponseTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRRestfulConformanceModeList' => 'FHIRStringPrimitive/FHIRRestfulConformanceModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSearchEntryModeList' => 'FHIRStringPrimitive/FHIRSearchEntryModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSearchModifierCodeList' => 'FHIRStringPrimitive/FHIRSearchModifierCodeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSearchParamTypeList' => 'FHIRStringPrimitive/FHIRSearchParamTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSlicingRulesList' => 'FHIRStringPrimitive/FHIRSlicingRulesList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSlotStatusList' => 'FHIRStringPrimitive/FHIRSlotStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSpecimenStatusList' => 'FHIRStringPrimitive/FHIRSpecimenStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRStructureDefinitionKindList' => 'FHIRStringPrimitive/FHIRStructureDefinitionKindList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSubscriptionChannelTypeList' => 'FHIRStringPrimitive/FHIRSubscriptionChannelTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSubscriptionStatusList' => 'FHIRStringPrimitive/FHIRSubscriptionStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSupplyDeliveryStatusList' => 'FHIRStringPrimitive/FHIRSupplyDeliveryStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSupplyRequestStatusList' => 'FHIRStringPrimitive/FHIRSupplyRequestStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSystemRestfulInteractionList' => 'FHIRStringPrimitive/FHIRSystemRestfulInteractionList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRTransactionModeList' => 'FHIRStringPrimitive/FHIRTransactionModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRTypeRestfulInteractionList' => 'FHIRStringPrimitive/FHIRTypeRestfulInteractionList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRUnitsOfTimeList' => 'FHIRStringPrimitive/FHIRUnitsOfTimeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRUnknownContentCodeList' => 'FHIRStringPrimitive/FHIRUnknownContentCodeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRUseList' => 'FHIRStringPrimitive/FHIRUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRVisionBaseList' => 'FHIRStringPrimitive/FHIRVisionBaseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRVisionEyesList' => 'FHIRStringPrimitive/FHIRVisionEyesList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRXPathUsageTypeList' => 'FHIRStringPrimitive/FHIRXPathUsageTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRTimePrimitive' => 'FHIRTimePrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRUnsignedIntPrimitive' => 'FHIRUnsignedIntPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive' => 'FHIRUriPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRUuidPrimitive' => 'FHIRUuidPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU2\FHIRXhtml' => 'FHIRXhtml.php',
    ];

    /** @var bool */
    private static bool $_registered = false;

    /**
     * @return bool
     * @throws \Exception
     */
    public static function register(): bool
    {
        if (!self::$_registered) {
            self::$_registered = spl_autoload_register(__CLASS__ . '::loadClass', true);
        }
        return self::$_registered;
    }

    /**
     * @return bool
     */
    public static function unregister(): bool
    {
        if (self::$_registered) {
            if (spl_autoload_unregister(__CLASS__ . '::loadClass')) {
                self::$_registered = false;
                return true;
            }
        }
        return false;
    }

    /**
     * Please see associated documentation for more information on what this method looks for.
     *
     * @param string $class
     * @return bool|null
     */
    public static function loadClass(string $class): null|bool
    {
        if (isset(self::_CLASS_MAP[$class])) {
            return (bool)require __DIR__ . DIRECTORY_SEPARATOR . self::_CLASS_MAP[$class];
        }
        return null;
    }
}
