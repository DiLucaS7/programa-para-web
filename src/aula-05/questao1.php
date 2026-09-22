<?php
$resposta = (string) readline('E mamifero? sim/nao: ');

if ($resposta === 'sim') {
    $resposta = (string) readline('E quadrupede? sim/nao: ');

    if ($resposta === 'sim') {
        $resposta = (string) readline('E carnivoro? sim/nao: ');

        if ($resposta === 'sim') {
            echo "Entao o animal escolhido foi leao.\n";
        } else {
            $resposta = (string) readline ('E herbivoro? sim/nao: ');

            if ($resposta === 'sim') {
                echo "Entao o animal escolhido foi cavalo.\n";
            } else {
                echo "Animal nao identificado.\n";
            }
        }
    } else {
        $resposta = (string) readline ('E bipede? sim/nao: ');

        if ($resposta === 'sim') {
            $resposta = (string) readline('E onivoro? sim/nao: ');

            if ($resposta === 'sim') {
                echo "Entao o animal escolhido foi homem.\n";
            } else {
                $resposta = (string) readline('E frutivoro? sim/nao: ');

                if ($resposta === 'sim') {
                    echo "Entao o animal escolhido foi macaco.\n";
                } else {
                    echo "Animal nao identificado.\n";
                }
            }
        } else {
            $resposta = (string) readline('E voador? sim/nao: ');

            if ($resposta === 'sim') {
                echo "Entao o animal escolhido foi morcego.\n";
            } else {
                $resposta = (string) readline('E aquatico? sim/nao: ');

                if ($resposta === 'sim') {
                    echo "Entao o animal escolhido foi baleia.\n";
                } else {
                    echo "Animal nao identificado.\n";
                }
            }
        }
    }
} else {
    $resposta = (string) readline('E ave? sim/nao: ');

    if ($resposta === 'sim') {
        $resposta = (string) readline('E nao voadora? sim/nao: ');

        if ($resposta === 'sim') {
            $resposta = (string) readline('E tropical? sim/nao: ');

            if ($resposta === 'sim') {
                echo "Entao o animal escolhido foi avestruz.\n";
            } else {
                $resposta = (string) readline('E polar? sim/nao: ');

                if ($resposta === 'sim') {
                    echo "Entao o animal escolhido foi pinguim.\n";
                } else {
                    echo "Animal nao identificado. \n";
                }
            }
        } else {
            $resposta = (string) readline('E nadadora? sim/nao: ');

            if ($resposta === 'sim') {
                echo "Entao o animal escolhido foi pato.\n";
            } else {
                $resposta = (string) readline('E de rapina? sim/nao: ');

                if ($resposta === 'sim') {
                    echo "Entao o animal escolhido foi aguia.\n";
                } else {
                    echo "Animal nao identificado.\n";
                }
            }
        }
    } else {
        $resposta = (string) readline('E reptil? sim/nao: ');

        if ($resposta === 'sim') {
            $resposta = (string) readline('Tem casco? sim/nao: ');

            if ($resposta === 'sim') {
                echo "Entao o animal escolhido foi tartaruga.\n";
            } else {
                $resposta = (string) readline('E carnivoro? sim/nao: ');

                if ($resposta === 'sim') {
                    echo "Entao o animal escolhido foi crocodilo.\n";
                } else {
                    $resposta = (string) readline('Nao tem patas? sim/nao: ');

                    if ($resposta === 'sim') {
                        echo "Entao o animal escolhido foi cobra.\n";
                    } else {
                        echo "Animal nao identificado.\n";
                    }
                }
            }
        } else {
            echo "Animal nao identificado.\n";
        }
    }
}
