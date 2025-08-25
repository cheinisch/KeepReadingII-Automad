<time datetime="@{ date | dateFormat (@{ formatDate | def ('Y-m-d H:i')}, @{ locale }) }">@{ date | dateFormat (@{ formatDate | def ('j M, Y')}, @{ locale }) }</time>

