<?php

interface StorageFeature
{
    public function list();
    public function add();
}

interface BasicFeature
{
    public function play();
    public function pause();
    public function next();
    public function pervious();
}

interface OnlineFeature
{
    public function login();
    public function register();
    public function createPlayList();
    public function saveFavourte();
}

class VideoPlayer implements BasicFeature, OnlineFeature, StorageFeature
{
    public function play()
    {
    }
    public function pause()
    {
    }
    public function next()
    {
    }
    public function pervious()
    {
    }
    public function list()
    {
    }
    public function add()
    {
    }
    public function login()
    {
    }
    public function register()
    {
    }
    public function createPlayList()
    {
    }
    public function saveFavourte()
    {
    }
}
