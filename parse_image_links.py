import webbrowser
# images/parse_image_links.py

from html.parser import HTMLParser

class ImageParser(HTMLParser):
    def handle_starttag(self, tag, attrs):
        for attr, val in attrs:
            if attr == "src" and tag == "img":
                print(f"Found Image: {val!r}")

with open("http://www.engelmark.org/index.html", mode="r", encoding="utf-8") as html_file:
    html_content = html_file.read()

parser = ImageParser()
parser.feed(html_content) 