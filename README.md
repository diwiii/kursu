Please add $dish->editLink();
Please add padding topbottom -> py-1rem to style

If the image width is 460px, after 460px of screen width we start to get blank space on the featured image,
it is broken until screen width reaches 768+ px

very first fix is : img resize at validation minimum is 768px
first fix is add margin: auto to img
or we should upload larger width images
maybe min 768

add 100% width to td
png image is not uploading?
image processing, do i need to resize?
# A restaurant menu

## todo:
* Add dish to category special: featured image slide show
* favicon!
* ~~iespēja mainīt kategoriju secību~~
* nomainit urlā id uz slug
* take care of the file permissions on the server
* ~~update dish edit form similar to dish create form~~
* ~~add create category and edit category forms~~
* ~~add controller for category~~
* ~~add css~~
* index jābūt atsevišķi no dishes index
