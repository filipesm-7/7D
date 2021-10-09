<?php

require_once 'Classes/Rectangle.php';
require_once 'Classes/Circle.php';

main();

function main(): void {
    echo "###########################################";
    echo "#           7D Shape Challenge            #";
    echo "###########################################";
    echo "\n\n";

    while (true) {
        printOptionsMenu();
        $option = readline('Select your option: ');

        switch($option) {
            case 1: {
                $shapeData = readShapeData('rectangle');
                $rectangle = new Classes\Rectangle($shapeData['width'], $shapeData['length']);
                printShapeDetails($rectangle);

                break;
            }
            case 2: {
                $shapeName = 'circle';
                $shapeData = readShapeData($shapeName);
                $radius = readline(sprintf('Please specify %s radius: ', $shapeName));
                $circle = new Classes\Circle($shapeData['width'], $shapeData['length'], $radius);
                printShapeDetails($circle);

                break;
            }
            case 3: {
                exit("Closing application...\n");
            }
            default: {
                echo "Please select a valid option!\n";
            }
        }
        echo "\n###########################################\n\n";
    }
}

function readShapeData($shapeName) {
    $width = readline(sprintf('Please specify %s width: ', $shapeName));
    $length = readline(sprintf('Please specify %s length: ', $shapeName));

    return [
        'width' => $width,
        'length' => $length,
    ];
}

function printOptionsMenu(): void {
    echo "What do you want to do?";
    echo "\n\n";
    echo "1 - Calculate Rectangle Area\n";
    echo "2 - Calculate Circle Area\n";
    echo "3 - Exit";
    echo "\n\n";
}

function printShapeDetails(Classes\Shape $shape): void {
    echo sprintf('%s area: %s', $shape->name, number_format($shape->getArea(), 2));
    echo "\n";
    echo sprintf('%s properties: %s', $shape->name, json_encode($shape->getProps()));
    echo "\n";
}