STEPS TO RUN UPLO MODULE:

1- PUT THE UPLO FOLDER IN APP\CODE OF YOUR PROJECT
2- RUN php bin/magento setup:upgrade or (s:upg)

the module will create a new menu item in admin menu called UPLO.
the module will create a table called uplo_file_uploads in your database.
the page allow you to upload a category or product csv file it only allow csv files upload.
Store the result of the upload in the database table
(file name , validation result , failure raison , error lines count , data of the upload)
then display the data in an admin grid that allow filtaration and pagination.
