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
        $this->assertEquals('Hello ${foo}', "Hello \${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals('"Hello " . $foo', '"Hello " . $foo');

        // TODO Heredoc
        $this->assertEquals('Hello world', <<<TEXT
Hello $foo
TEXT);

        // TODO Nowdoc
        $this->assertEquals('"Hello " . $foo', <<<'TEXT'
"Hello " . $foo
TEXT
        );
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
        $this->assertEquals('Hello', ltrim('         Hello'));
        $this->assertEquals('Hello', ltrim('......Hello', '.'));

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
        $this->assertEquals('hELLO', lcfirst('HELLO'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('Hello', strip_tags('<div>Hello</div>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals('&lt;div&gt;Hello&lt;/div&gt;', htmlspecialchars("<div>Hello</div>", ENT_QUOTES));

        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals("H\'E\'L\'l\'O", addslashes("H'E'L'l'O"));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals(true, strcmp('HELLO', 'Hello'));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals(false, strncasecmp('HELLO', 'hello', 2));

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals('HaEaLaLaO', str_replace(" ",'a' , 'H E L L O'));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals(false, strpos('Hello world', 'Hell'));

        // strstr — Find the first occurrence of a string
        // TODO to be implemented
        $this->assertEquals('He', strstr('HeLlo', 'L', true));

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals('Llo', strrchr('HeLlo', 'L'));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals('H', substr('Hello', -5, 1));

        // sprintf — Return a formatted string
        // TODO to be implemented
        $this->assertEquals('Hello 5 times one world!', sprintf('Hello %d times %s world!', 5, 'one'));

    }
}