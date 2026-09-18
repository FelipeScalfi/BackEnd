## LISTA DE EXERCÍCIOS: SEGURANÇA E HIGIENIZAÇÃO DE DADOS 

1. **XSS** significa Cross-Site Scripting e permite a execução de códigos maliciosos no navegador do usuário. O Back-End deve prevenir esse problema tratando e protegendo os dados antes de exibi-los.

2. **XSS Refletido** ocorre quando o código malicioso é enviado e retornado imediatamente pela aplicação. O **XSS Stored** fica armazenado no sistema e pode atingir vários usuários, tendo potencial de impacto maior.

3. A função `htmlspecialchars()` transforma `<` em `&lt;` e `>` em `&gt;`. Dessa forma, o navegador interpreta esses símbolos como texto e não como tags HTML ou código executável.

4. `ENT_QUOTES` protege aspas simples e duplas. Sem ela, um atacante pode tentar fechar o atributo de um `<input>` e inserir código malicioso.

5. `FILTER_SANITIZE_STRING` não deve ser usado em PHP moderno porque foi depreciado e removido no PHP 8.3. Atualmente, deve-se usar validação e técnicas adequadas de codificação da saída.

6. `empty()` apenas verifica se o campo está vazio, enquanto `filter_var()` com `FILTER_VALIDATE_EMAIL` verifica se o valor possui formato de e-mail válido.

7. Em uma falha XSS, um atacante pode executar JavaScript e tentar roubar cookies de sessão acessíveis ao navegador. O uso de cookies com `HttpOnly` ajuda a impedir esse acesso pelo JavaScript.

8. Sanitizar os dados na entrada não é suficiente porque os dados podem ser usados em diferentes contextos. Por isso, também é necessário proteger a saída, usando `htmlspecialchars()` quando os dados forem exibidos em HTML.
