<?php

function countCharacters(string $word) : int {
    $characters = count_chars($word, 1);

    return array_sum($characters);
}

function countWords(string $word) : int {
    return str_word_count($word);
}
