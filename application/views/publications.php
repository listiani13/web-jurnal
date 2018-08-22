<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<?php echo $header; ?>
<style>
    .center{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    p {
        text-align: justify;
    }
    h3 .subbab {
        font-weight: bold;
        font-style: italic;
    }
</style>
<!-- Heading -->
<div id="heading" >
	<h1>Publications</h1>
</div>

<!-- Main -->
<section id="main" class="wrapper">
	<div class="inner">
		<div class="content">
            <header>
                <h2>First Paper: Paper Title</h2>
            </header>
            <p>This paper addresses the central problem of automatic segmentation of lumbar spine Magnetic Resonance Imaging (MRI) images to delineate boundaries between the anterior arch and posterior arch of the lumbar spine. This is necessary to efficiently detect the occurrence of lumbar spinal stenosis as a leading cause of Chronic Lower Back Pain. A patch-based classification neural network consisting of convolutional and fully connected layers is used to classify and label pixels in MRI images. The classifier is trained using overlapping patches of size 25x25 pixels taken from a set of cropped axial-view T2-weighted MRI images of the bottom three intervertebral discs. A set of experiment is conducted to measure the performance of the classification network in segmenting the images when either all or each of the discs separately is used. Using pixel accuracy, mean accuracy, mean Intersection over Union (IoU), and frequency weighted IoU as the performance metrics we have shown that our approach produces better segmentation results than eleven other pixel classifiers. Furthermore, our experiment result also indicates that our approach produces more accurate delineation of all important boundaries and making it best suited for subsequent stage of lumbar spinal stenosis detection.</p>
            <a href="#">Paper Title</a>
            <hr />
            <header>
                <h2>Second Paper: Paper Title</h2>
            </header>
            <p>Artificial Intelligence through supervised machine learning remains an attractive and popular research area in medical image processing. The objective of such research is often tied to the development of an intelligent computer aided diagnostic system whose aim is to assist physicians in their task of diagnosing diseases. The quality of the resulting system depends largely on the availability of good data for the machine learning algorithm to train on. Training data of a supervised learning process needs to include ground truth, i.e., data that have been correctly annotated by experts. Due to the complex nature of most medical images, human error, experience, and perception play a strong role in the quality of the ground truth. In this paper, we present the results of annotating lumbar spine Magnetic Resonance Imaging images for automatic image segmentation and propose confidence and consistency metrics to measure the quality and variability of the resulting ground truth data, respectively.</p>
            <a href="#">Paper Title</a>
            <hr />
            <header>
                <h2>Third Paper: Paper Title</h2>
            </header>
            <p>Lumbar spinal stenosis is a narrowing of spinal canal caused by inflammation of bone or soft tissues and creates pressure on spinal nerve roots. Its diagnosis is carried out by specialists through inspection of Magnetic Resonance Imaging scan of the patient’s lumbar spine. In this paper, we propose a methodology to aid clinicians in performing stenosis detection through semantic segmentation and delineation of the scans using deep learning approach. Our dataset contains MRI studies of 575 patients with symptomatic back pains. Each study is annotated by an expert radiologist with notes regarding the observed characteristics and condition of the lumbar spine. We have developed ground truth dataset from a large subset of this dataset, containing image labels of four important regions in the lumbar spine. We developed a novel way to assess the quality of the ground truth dataset. Our evaluation of the semantic segmentation and the delineation results shows that our proposed methodology produces very good performance as measured by several contour-based and region-based metrics including accuracy, intersection-over-union, and BF score. We also presented two representative delineation results based on the worst and best contour-based metric to show visually how accurate and suitable the results are for computer-aided-diagnosis purposes.</p>
            <a href="#">Paper Title</a>
		</div>
	</div>
</section>
<?php echo $footer; ?>
