<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campaigns = [
            [
                'title' => 'Chi me lo fa fare?',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nulla dolor, tempor vitae erat sit amet, congue elementum dolor. Donec eget odio semper, tincidunt metus eget, sagittis lectus. Mauris in libero aliquet, sodales eros sed, finibus nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sodales, purus a euismod volutpat, leo massa facilisis purus, in eleifend justo orci facilisis lorem. Donec elementum consectetur massa at consectetur. Nunc nec mi a sapien iaculis scelerisque. Duis mauris leo, tincidunt vitae viverra id, suscipit a magna. Pellentesque id metus lorem. Aliquam scelerisque pretium aliquam. Cras aliquet turpis vitae justo pretium ornare. Cras vitae justo et nulla posuere placerat sed non erat. ',
                'is_active' => false
            ], 
            [
                'title' => 'Morningstar',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nulla dolor, tempor vitae erat sit amet, congue elementum dolor. Donec eget odio semper, tincidunt metus eget, sagittis lectus. Mauris in libero aliquet, sodales eros sed, finibus nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sodales, purus a euismod volutpat, leo massa facilisis purus, in eleifend justo orci facilisis lorem. Donec elementum consectetur massa at consectetur. Nunc nec mi a sapien iaculis scelerisque. Duis mauris leo, tincidunt vitae viverra id, suscipit a magna. Pellentesque id metus lorem. Aliquam scelerisque pretium aliquam. Cras aliquet turpis vitae justo pretium ornare. Cras vitae justo et nulla posuere placerat sed non erat. ',
                'is_active' => true
            ], 
            [
                'title' => 'Campagna 3',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nulla dolor, tempor vitae erat sit amet, congue elementum dolor. Donec eget odio semper, tincidunt metus eget, sagittis lectus. Mauris in libero aliquet, sodales eros sed, finibus nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sodales, purus a euismod volutpat, leo massa facilisis purus, in eleifend justo orci facilisis lorem. Donec elementum consectetur massa at consectetur. Nunc nec mi a sapien iaculis scelerisque. Duis mauris leo, tincidunt vitae viverra id, suscipit a magna. Pellentesque id metus lorem. Aliquam scelerisque pretium aliquam. Cras aliquet turpis vitae justo pretium ornare. Cras vitae justo et nulla posuere placerat sed non erat. ',
                'is_active' => false
            ], 
            [
                'title' => 'E qua?',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nulla dolor, tempor vitae erat sit amet, congue elementum dolor. Donec eget odio semper, tincidunt metus eget, sagittis lectus. Mauris in libero aliquet, sodales eros sed, finibus nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sodales, purus a euismod volutpat, leo massa facilisis purus, in eleifend justo orci facilisis lorem. Donec elementum consectetur massa at consectetur. Nunc nec mi a sapien iaculis scelerisque. Duis mauris leo, tincidunt vitae viverra id, suscipit a magna. Pellentesque id metus lorem. Aliquam scelerisque pretium aliquam. Cras aliquet turpis vitae justo pretium ornare. Cras vitae justo et nulla posuere placerat sed non erat. ',
                'is_active' => false
            ]
        ];
         DB::table('campaigns')->insert($campaigns);
    }
}
