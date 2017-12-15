<?php

class TextWizard
{
    /**
     * @var
     */
    private $text;

    /**
     * @var
     */
    private $uniqueWords;

    /**
     *
     */
    public function readTextFromKeyboard()
    {
        $this->text = readline('Write some text: ');
    }

    /**
     * TextWizard constructor
     */
    public function __construct()
    {
        $this->readTextFromKeyboard();
    }

    /**
     * @param int $length
     */
    public function findUniqueWordsOfLength(int $length = 3)
    {
        $wordsOfText = str_word_count($this->text, 1);
        foreach ($wordsOfText as $key => $value) {
            if (strlen($wordsOfText[$key]) <= $length) {
                unset($wordsOfText[$key]);
            }
        }

        $this->uniqueWords = array_unique($wordsOfText);
    }

    /**
     * @return int
     */
    public function getCountOfUniqueWords() {
        print_r(count($this->uniqueWords));
        return count($this->uniqueWords);
    }

    /**
     *
     */
    public function printText()
    {
        print_r($this->text);
    }

    /**
     *
     */
    public function printUniqueWords()
    {
        print_r($this->uniqueWords);
    }

    /**
     *
     */
    public function clear() {
        $this->text         = null;
        $this->uniqueWords  = null;
    }
}

$wizard = new TextWizard();
$wizard->findUniqueWordsOfLength();
$wizard->getCountOfUniqueWords();
//$wizard->printText();
//$wizard->printUniqueWords();
$wizard->clear();
