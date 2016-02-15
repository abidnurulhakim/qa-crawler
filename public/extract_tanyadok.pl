# Author
# Name  : Abid Nurul Hakim
# NPM   : 1206237214
# Date  : 14/02/2016
# ===============================================

use strict;
use Data::Dumper;

main();

sub main {
    open(IN, "<", "1_2016-02-14-150022_texts.txt");
    open(OUT, ">", "console.txt");
    my $data = "";
    while (my $line = <IN>)
    {
        $data .= $line;
    }
    close(IN);

    my @result;
    my @articles = getTagValue("article", $data);
    for (my $x = 0; $x < scalar(@articles); $x++) {
        my $question;
        my @title = getTagValue("h1", $articles[$x]);
        $question .= $title[0];
        my @tagAnswer = split("<div id=\"qa-archive-answer\">\n+<p><strong>Jawaban", $articles[$x]);
        my @tempSplit = split("<p>", $tagAnswer[0]);
        for (my $var = 1; $var < scalar(@tempSplit); $var++) {
            if (length($tempSplit[$var]) > 0 && $tempSplit[$var] ne " ") {
                my @tempQuestion = split("</p>", $tempSplit[$var]);
                $tempQuestion[0] =~ s/<br>//g;
                $tempQuestion[0] =~ s/<[^>]*>/ /g;
                $tempQuestion[0] =~ s/^\s+|\s+$//g;
                $question .= ". ".$tempQuestion[0];
            }
        }
        my @answer = getTagValue("p", $tagAnswer[1]);
        $answer[0] =~ s/<br>//g;
        $answer[0] =~ s/<[^>]*>/ /g;
        $answer[0] =~ s/[[:^ascii:]]+/ /g;
        $answer[0] =~ s/^\s+|\s+$//g;
        my %temp;
        $temp{'question'} = $question;
        $temp{'answer'} = $answer[0];
        push(@result, \%temp);
    }
    print OUT Dumper(\@result);
}

# Get value from tag in string.
# @param $ (scalar)
# @param $ (scalar)
# @return @ (array)
sub getTagValue
{
    my @result;
    my($stringTag, $stringData) = (@_[0], @_[1]);
    my @tempSplit = split("<$stringTag [^>]*>", $stringData);
    if (scalar(@tempSplit) < 2) {
        @tempSplit = split("<$stringTag>", $stringData);
        if (scalar(@tempSplit) < 2) {
            return @result;
        }
    }
    for (my $var = 1; $var < scalar(@tempSplit); $var++) {
        if (length($tempSplit[$var]) > 0 && $tempSplit[$var] ne " ") {
            my @temp = split("</$stringTag>", $tempSplit[$var]);
            $temp[0] =~ s/^\s+|\s+$//g;
            push(@result, $temp[0]);
        }
    }
    return @result;
}