<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"
        $this->assertEquals('Hello world', "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals('Hello world', "Hello " . $foo);

        // TODO Heredoc
        $this->assertEquals('Hello world', <<<EOD
Hello $foo
EOD);

        // TODO Nowdoc
        $this->assertEquals('Hello $foo', <<<'EOD'
Hello $foo
EOD);
    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented
        $this->assertEquals('Hello', ltrim('              Hello'));
        $this->assertEquals('Hello', ltrim('.......Hello', '.'));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals('Hello', rtrim('Hello         '));
        $this->assertEquals('Hello', rtrim('Hello......', '.'));

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('Hello', ucfirst('hello'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('hello', lcfirst('Hello'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('Hello World', strip_tags('Hello <span>World</span>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals('Hello &lt;span&gt;World&lt;/span&gt;', htmlspecialchars('Hello <span>World</span>'));

        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals('Hello <span>World</span>', addslashes('Hello <span>World</span>'));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals(-1, strcmp('Car', 'Moto'));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals(0, strncasecmp('Car', 'Car', 3));

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals('I would like to buy a bike', str_replace('car', 'bike', 'I would like to buy a car'));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals(2, strpos('Orange', 'a'));

        // strstr — Find the first occurrence of a string
        // TODO to be implemented
        $this->assertEquals('email', strstr('email@gmail.com', '@', true));

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals('ange', strrchr('Orange', 'a'));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals('cdefg', substr('abcdefg', 2));

        // sprintf — Return a formatted string
        // TODO to be implemented
        $name = 'Alex';
        $format = 'Hello, %s';
        $this->assertEquals('Hello, Alex', sprintf($format, $name));
    }
}