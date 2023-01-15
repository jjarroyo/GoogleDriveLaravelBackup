<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Vision;

class GoogleCloudVisionV1p1beta1WebDetection extends \Google\Collection
{
  protected $collection_key = 'webEntities';
  protected $bestGuessLabelsType = GoogleCloudVisionV1p1beta1WebDetectionWebLabel::class;
  protected $bestGuessLabelsDataType = 'array';
  public $bestGuessLabels;
  protected $fullMatchingImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebImage::class;
  protected $fullMatchingImagesDataType = 'array';
  public $fullMatchingImages;
  protected $pagesWithMatchingImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebPage::class;
  protected $pagesWithMatchingImagesDataType = 'array';
  public $pagesWithMatchingImages;
  protected $partialMatchingImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebImage::class;
  protected $partialMatchingImagesDataType = 'array';
  public $partialMatchingImages;
  protected $visuallySimilarImagesType = GoogleCloudVisionV1p1beta1WebDetectionWebImage::class;
  protected $visuallySimilarImagesDataType = 'array';
  public $visuallySimilarImages;
  protected $webEntitiesType = GoogleCloudVisionV1p1beta1WebDetectionWebEntity::class;
  protected $webEntitiesDataType = 'array';
  public $webEntities;

  /**
   * @param GoogleCloudVisionV1p1beta1WebDetectionWebLabel[]
   */
  public function setBestGuessLabels($bestGuessLabels)
  {
    $this->bestGuessLabels = $bestGuessLabels;
  }
  /**
   * @return GoogleCloudVisionV1p1beta1WebDetectionWebLabel[]
   */
  public function getBestGuessLabels()
  {
    return $this->bestGuessLabels;
  }
  /**
   * @param GoogleCloudVisionV1p1beta1WebDetectionWebImage[]
   */
  public function setFullMatchingImages($fullMatchingImages)
  {
    $this->fullMatchingImages = $fullMatchingImages;
  }
  /**
   * @return GoogleCloudVisionV1p1beta1WebDetectionWebImage[]
   */
  public function getFullMatchingImages()
  {
    return $this->fullMatchingImages;
  }
  /**
   * @param GoogleCloudVisionV1p1beta1WebDetectionWebPage[]
   */
  public function setPagesWithMatchingImages($pagesWithMatchingImages)
  {
    $this->pagesWithMatchingImages = $pagesWithMatchingImages;
  }
  /**
   * @return GoogleCloudVisionV1p1beta1WebDetectionWebPage[]
   */
  public function getPagesWithMatchingImages()
  {
    return $this->pagesWithMatchingImages;
  }
  /**
   * @param GoogleCloudVisionV1p1beta1WebDetectionWebImage[]
   */
  public function setPartialMatchingImages($partialMatchingImages)
  {
    $this->partialMatchingImages = $partialMatchingImages;
  }
  /**
   * @return GoogleCloudVisionV1p1beta1WebDetectionWebImage[]
   */
  public function getPartialMatchingImages()
  {
    return $this->partialMatchingImages;
  }
  /**
   * @param GoogleCloudVisionV1p1beta1WebDetectionWebImage[]
   */
  public function setVisuallySimilarImages($visuallySimilarImages)
  {
    $this->visuallySimilarImages = $visuallySimilarImages;
  }
  /**
   * @return GoogleCloudVisionV1p1beta1WebDetectionWebImage[]
   */
  public function getVisuallySimilarImages()
  {
    return $this->visuallySimilarImages;
  }
  /**
   * @param GoogleCloudVisionV1p1beta1WebDetectionWebEntity[]
   */
  public function setWebEntities($webEntities)
  {
    $this->webEntities = $webEntities;
  }
  /**
   * @return GoogleCloudVisionV1p1beta1WebDetectionWebEntity[]
   */
  public function getWebEntities()
  {
    return $this->webEntities;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudVisionV1p1beta1WebDetection::class, 'Google_Service_Vision_GoogleCloudVisionV1p1beta1WebDetection');
