## Laravel Number To Words

Laravel package for converting numeric value to english words.

### Installation

To install the package, simply require it using Composer:
```
composer require bushart/numbertowords    
```

### Publish configuration  files

```
php artisan vendor:publish --tag=config
```


### Usage

```
NumberToWord::number2Word(10000)  Ten Thousand
NumberToWord::number2Word(10250)  Ten Thousand Two Hundred Fifty
```

### Example

Like below:
```
class TestController extends Controller
{
    public function index() {
            echo NumberToWord::number2Word(10250); //Ten Thousand Two Hundred Fifty 
    }
}
```


### Support

If you encounter any issues with this package, please open an issue on the GitHub repository or contact us at busharthussain@gmail.com.

I hope this example description helps you write your own README file! Let me know if you have any other questions.