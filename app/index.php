<?
    echo `[
        { 
            method: "GET", 
            path: "/posts", 
            description: "Lists all the posts."
        },
        {
            method: "POST",
            path: "/posts/:code:",
            description: "Adds a new post.", 
            body: [{param_name: "title", type: "String"}, {param_name: "abstract", type: "String"}]
        },
        {
            method: "PATCH", 
            path: "/posts/:code:",
            description: "Edits an existing post. You must provide an existing code in the body request", 
            body: [{param_name: "title", type: "String"}, {param_name: "abstract", type: "String"}]
        },
        {
            method: "DELETE",
            path: "/posts/:code:",
            description: "Deletes a post with a given code provided in the body."
        }
    ]`;
?>