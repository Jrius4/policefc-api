@if (isset($categoryName))
   
        Category: <strong>{{ $categoryName }}</strong>
   
@endif

@if (isset($tagName))
   
        Tagged: <strong>{{ $tagName }}</strong>
   
@endif

@if (isset($authorName))
   
        Author: <strong>{{ $authorName }}</strong>
   
@endif

@if ($term = request('term'))
   
        Search Results for: <strong>{{ $term }}</strong>
   
@endif

