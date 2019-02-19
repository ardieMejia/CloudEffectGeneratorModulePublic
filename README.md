s# CloudEffectGeneratorModulePublic

Dont know how to name this project.

Its a php function that create layers and layers of transparent circles to resemble clouds. 
And the user can choose the cloud's "spread" and "weight" (kind of like a thunderstorm cloud). Experts will have plenty of
comments, Im sure, but the image file upload module is really basic, uploads to nested folder in the project (not a blob in database), and only allowing *.jpg extension for now.

Its a very long winded way to do a simple effect, and the cloud is randomized everytime...

------------------------------ Important ------------------------------

The image file will upload to ./uploads. So, at project root execute:
    sudo chown -R www-data .
If you project is under /var/www, you may execute on /var/www


------------------------------ Important ------------------------------
