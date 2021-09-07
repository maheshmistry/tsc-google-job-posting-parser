<?php

require_once 'src/JobPosting.php';

use PHPUnit\Framework\TestCase;

final class JobPostingTest extends TestCase
{
    public function testJobPostingJson(): void
    {
        $exJson=array(
            'title'=>'Php Developer',
            'requirements'=> 'Make code everyday',
            'date'=> '07-09-2021',
            'company'=>'talentsconnect',
            'location'=>'cologne',
            'expiry'=>'01-10-2021',
            'website'=>'tsc.com'
        );

        $jobPosting = new JobPosting();

        $jobPosting->setTitle($exJson['title']);
        $jobPosting->setHiringOrganization($exJson['company'],$exJson['website']);
        $jobPosting->setDescription($exJson['requirements']);
        $jobPosting->setDatePosted($exJson['date']);
        $jobPosting->setJobLocation($exJson['location']);
        $jobPosting->setValidThrough($exJson['expiry']);

        $generatedJson = json_encode($jobPosting);
        $stack = '{"@context":"https://schema.org/","@type":"JobPosting","title":"Php Developer","datePosted":"07-09-2021","description":"Make code everyday","hiringOrganization":{"@type":"Organization","name":"talentsconnect","sameAs":"tsc.com"},"jobLocation":{"@type":"Place","address":"cologne"},"validThrough":"01-10-2021"}';
        $this->assertJsonStringEqualsJsonString($stack, $generatedJson);
    }
}