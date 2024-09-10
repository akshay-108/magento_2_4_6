===== How to Add Command line in to Console CLI in Magento 2 =====\

Step 1: Define command in di.xml

    In di.xml file, you can use a type with name Magento\Framework\Console\CommandList to define the command option.

    File: app/code/Akshay/CommandLine/etc/di.xml

    This config will declare a command class Sayhello. This class will define the command name and execute() method for this command.

Step 2: Create command class

    As define in di.xml, we will create a command class:

    File: app/code/Akshay/CommandLine/Console/Sayhello.php

    In this function, we will define 2 methods:

        configure() method is used to set the name, description, command line arguments of the magento 2 add command line
        
        execute() method will run when we call this command line via console.

