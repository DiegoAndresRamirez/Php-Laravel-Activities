<?php

namespace App\Services;

use App\Models\Country;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CountryScraper
{
    public function scrape()
    {
        $url = 'https://wiki.useargo.com/es/index.php/knowledgebase/integraciones-api-rest-lista-de-paises-para-nacionalidad/';
        $response = Http::get($url);

        if ($response->successful()) {
            $html = $response->body();
            $doc = new \DOMDocument();
            @$doc->loadHTML($html);

            $xpath = new \DOMXPath($doc);
            $rows = $xpath->query("//table/tbody/tr");

            foreach ($rows as $index => $row) {
                $cells = $row->getElementsByTagName('td');

                if ($cells->length < 2) {
                    continue;
                }

                $name = trim($cells->item(1)->textContent ?? '');

                if (empty($name)) {
                    continue;
                }

                Country::updateOrCreate(['name' => $name]);
            }

            Log::info('Countries saved');
        } else {
            Log::error('Error: ' . $response->status());
        }
    }
}
