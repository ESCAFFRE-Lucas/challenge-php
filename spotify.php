<?php

class Song
{
    private string $artist;
    private string $title;
    private string $duration;

    public function __construct(string $artist, string $title, string $duration)
    {
        $this->artist = $artist;
        $this->title = $title;
        $this->duration = $duration;
    }
}

class Playlist
{
    private array $songs;
    private int $totalMedias;

    public function addMedia(Song $song): void
    {

    }

    public function __toString(): string
    {
        return "";
    }
}

class App
{
    private array $content;

    public function start(): void
    {
        $time3 = 0;
        $time4 = 0;
        foreach ($this->content as $cont => $item) {
            $time = explode(";", $item)[2];
            $time2 = explode(":", $time);
            $time3 += intval($time2[0]);
            $time4 += intval($time2[1]);
            if ($time4 > 60) {
                $time3++;
                $time4 = 0;
            }
        }
        $this->write("", $time3, $time4);
    }

    public function setContent(array $arr): void
    {
        $this->content = $arr;
    }

    public function getContent(): array
    {
        return $this->content;
    }

    private function readLine(bool $asArray = false): array|bool|string
    {
        ob_start();

        echo implode("", $this->getContent());

        $data = ob_get_contents();
        if ($asArray) {
            $data = explode("\n", ob_get_contents());
        }

        ob_clean();

        return $data;
    }

    public function write(string $str, int $time1, int $time2): void
    {
        $arrLength = count($this->content);

        echo "Songs added: $arrLength\n";
        echo "Playlist length: 0h $time1"."m $time2"."s";
    }
}
