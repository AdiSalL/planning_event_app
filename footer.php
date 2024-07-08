</div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const savedTheme = localStorage.getItem("theme");
      const themeToggleCheckbox = document.getElementById("theme-toggle");
      
      if (savedTheme) {
        document.documentElement.setAttribute("data-theme", savedTheme);
        if (savedTheme === "dark") {
          themeToggleCheckbox.checked = true;
        } else {
          themeToggleCheckbox.checked = false;
        }
      }
      
      function handleClick() {
        const currentTheme = document.documentElement.getAttribute("data-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";
        document.documentElement.setAttribute("data-theme", newTheme);
        localStorage.setItem("theme", newTheme);
        
        if (newTheme === "dark") {
          themeToggleCheckbox.checked = true;
        } else {
          themeToggleCheckbox.checked = false;
        }
      }
      
      window.handleClick = handleClick;
    });
  </script>
</body>
</html>