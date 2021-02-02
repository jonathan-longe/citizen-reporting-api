<?php

namespace Tests\Api;


use Tests\TestCase;

class SubmissionTest extends TestCase
{
    /** @test */
    public function test_store_submission()
    {
        $payload = [
            'lat'                   => '123',
            'lon'                   => '49',
            'incident-date'         => '2020-10-23',
            'while-i-was'           => 'a pedestrian',
            'relationship'          => 'observed',
            'incident-type'         => 'a crash',
            'involving'             => 'pedestrian',
            'involving-2'           => 'car',
            'injured'               => FALSE,
            'was-police-informed'   => TRUE,
            'possible-cause'        => 'speeding',
            'contributed'           => 'poor visibility',
            'what-happened'         => 'a pedestrian was struck while crossing the road'
        ];

        $response = $this->post(route('submissions.store'), $payload);

        $response->assertCreated();

        $this->assertDatabaseHas('submissions', $payload);

    }
}
