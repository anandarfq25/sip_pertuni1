<?php

namespace App\Services;

use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\AudioEncoding; // Tambahkan ini
use Google\Cloud\TextToSpeech\V1\Client\TextToSpeechClient as ClientTextToSpeechClient;

class TextToSpeechService
{

    protected $client, $voice, $input, $audioConfig;
    public function synthesizeText($text)
    {
        $client = new ClientTextToSpeechClient();

        $input = new SynthesisInput(['text' => $text]);
        $voice = new VoiceSelectionParams([
            'language_code' => 'id-ID',
            'ssml_gender' => 'FEMALE', // Gunakan enum yang benar
        ]);
        $audioConfig = new AudioConfig([
            'audio_encoding' => AudioEncoding::MP3 // Perbaiki namespace
        ]);

        $response = $client->synthesizeSpeech($input, $voice, $audioConfig);
        $client->close();

        return $response->getAudioContent();
    }
}
