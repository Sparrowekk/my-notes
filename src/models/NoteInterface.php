<?php


namespace MyNotes;

interface NoteInterface {

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     */
    public function setId(int $id);


    /**
     * @return string
     */
    public function getTitle();


    /**
     * @param string $title
     */
    public function setTitle(string $title);


    /**
     * @return string
     */
    public function getContent();


    /**
     * @param string $content
     */
    public function setContent(string $content);


    /**
     * @return string
     */
    public function getSlug();


    /**
     * @param string $slug
     */
    public function setSlug(string $slug);


    /**
     * @return string
     */
    public function getPublished(): string;


    /**
     * @param string $published
     */
    public function setPublished(string $published);


}