<?php
declare(strict_types=1);

function process_transactions(string $transaction_path): array {
    $transaction_file_names = get_filenames_from_directory($transaction_path);
    $transaction_files = read_csv_files($transaction_file_names, $transaction_path);

    return add_header_to_rows($transaction_files);
}

function add_header_to_rows(array $transactions) {
    $headers = array_shift($transactions);
    $combined_array = [];
    foreach ($transactions as $transaction) {
        $combined_array[] = array_combine($headers, $transaction);
    }

    return $combined_array;
}

function read_csv_files(array $file_names, string $transaction_path) : array {
    $output = [];
    foreach ($file_names as $file) {
        if (($file_stream = fopen($transaction_path . $file, 'r')) === false ) continue;

        while(($transaction = fgetcsv($file_stream)) !== false) {
            $output[] = $transaction;
        }

        fclose($file_stream);
    }

    return $output;
}

function get_filenames_from_directory(string $transaction_path): array {
    $filenames = array_diff(scandir($transaction_path), ['.', '..']);
    return array_values($filenames);
}

return process_transactions(TRANSACTION_PATH);
