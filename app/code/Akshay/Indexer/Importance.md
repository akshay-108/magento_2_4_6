Indexing is how Magento transforms data such as products, categories, and so on, to improve the performance of your storefront. As data changes, the transformed data must be updated—or reindexed. Magento has a very sophisticated architecture that stores lots of merchant data (including catalog data, prices, users, stores, and so on) in many database tables. To optimize storefront performance, Magento accumulates data into special tables using indexers.

For example, suppose you change the price of an item from $8.99 to $6.99. Magento must reindex the price change to display it on your storefront.

Without indexing, Magento would have to calculate the price of every product on the fly—taking into account shopping cart price rules, bundle pricing, discounts, tier pricing, and so on. Loading the price for a product would take a long time, possibly resulting in cart abandonment.

app/code/Akshay/Indexer/etc/indexer.xml

    The id attribute is used to identify this indexer. You can call it when you want to check status, mode or reindex this indexer by command line.
    The view_id is the id of view element which will be defined in the mview configuration file.
    The class attribute is the name to the class which we process indexer method.

    The title element is used to define the Title of this when showing in indexer grid.
    The description element is used to define the Description of this when showing in indexer grid.

app/code/Akshay/Indexer/etc/mview.xml

    The mview.xml file is used to track database changes for a certain entity and running change handle (execute() method).

    In this file, we define a view element with an id attribute to call from indexer and a class which contain the execute() method. This method will run when the table in subscriptions is changed.

    To declare the table, we use the table name and the column of this table which will be sent to the execute() method. In this example, we declare the table catalog_product_entity. So whenever one or more products is saved, the execute() method in class 

app/code/Akshay/Indexer/Model/Indexer/Test.php

    Follow the indexer.xml and mview.xml above, we will define an Indexer class for both of them: Akshay/Indexer\Model\Indexer\Test

    You can write the code to add data to your indexer table in the methods in Indexer class.



